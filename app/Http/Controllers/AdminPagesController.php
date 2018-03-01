<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /* $pages = Pages::all(); */
        /* $pages = Pages::groupBy('page_id')->get(); */
        $postedpages = Pages::wherePosted(1)->get();
        /* $nopostedpages = Pages::wherePosted(0)->groupBy('page_id')->get(); */
        /* $nopostedpages = Pages::select('page_id')->distinct()->get(); */
        /* $nopostedpages = Pages::distinct()->wherePosted(0)->groupBy('page_id')->get(); */
        $pages = $postedpages->merge($nopostedpages);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $templates = array(1 => '1', '2', '3');

        return view('admin.pages.create', compact('templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Pages::max('page_id')){
            $add_pageId = Pages::max('page_id') + 1;
        } else {
            $add_pageId = 1;
        }
        $request->request->add(['page_id'=>$add_pageId]);

        $input = $request->all();

        $page = Pages::create($input);

        /* $inputParent = $request->input('parent');  
        $parent = 
            $parent1 = Pages::where('name', $page->parent);
            if($parent1 != ''){
                return $parent1 . "/";
            }
        ;
        $subparent = 
            $parent2 = Pages::where('name', $parent->parent);
            if($parent2 != ''){
                return $parent2 . "/";
            }
        ;
        $subsubparent = 
            $parent3 = Pages::where('name', $subparent->parent);
            if($parent3 != ''){
                return $parent3 . "/";
            }
        ;
        $parentslug = $parent . $subparent . $subsubparent;

        $page->update('parentslug', $parentslug); */

        return redirect()->route('admin.pages.editTemplate', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $templates = ['1', '2', '3'];

        $page = Pages::findOrFail($id);

        return view('admin.pages.edit', compact('page', 'templates'));
    }
    public function editTemplate($id)
    {
        $page = Pages::findOrFail($id);

        return view('admin.pages.editTemplate', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $oldpage = Pages::findOrFail($id);
        $oldpage->update(array('posted' => 0));
        $add_pageId = $oldpage->page_id;
        $request->request->add(['page_id'=>$add_pageId]);
        $add_content = $oldpage->content;
        $request->request->add(['content'=>$add_content]);

        /* if($oldpage->posted == 1){
            $request->request->add(['posted'=>1]);
        } else {
            $request->request->add(['posted'=>0]);
        } */

        $input = $request->all();

        $page = Pages::create($input);
        
        /* $page = Pages::findOrFail($id);
        
        $page->update($input); */

        return redirect('/admin/pages');
    }
    public function updateTemplate(Request $request, $id)
    {
        $oldpage = Pages::findOrFail($id);
        $add_pageId =  $oldpage->page_id;
        $request->request->add(['page_id'=>$add_pageId]);
        $add_name =  $oldpage->name;
        $request->request->add(['name'=>$add_name]);
        $add_slug =  $oldpage->slug;
        $request->request->add(['slug'=>$add_slug]);
        $add_template =  $oldpage->template;
        $request->request->add(['template'=>$add_template]);

        if($oldpage->posted == 1){
            $request->request->add(['posted'=>1]);
        } else {
            $request->request->add(['posted'=>0]);
        }
        $oldpage->update(array('posted' => 0));

        $input = $request->all();

        $page = Pages::create($input);
        //
        /* $input = $request->all();
        
        $page = Pages::findOrFail($id);
        
        $page->update($input); */

        return redirect('/admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $page = Pages::findOrFail($id);
        $page->delete();

        Session::flash('deleted_page', 'The page has been deleted');

        return redirect('/admin/pages');
    }

    public function page($slug)
    {
        $page = Pages::where('slug', $slug)->firstOrFail();

        return view('page', compact('page'));
    }
}
