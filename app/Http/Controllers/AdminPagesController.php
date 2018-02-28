<?php

namespace App\Http\Controllers;

use App\Pages;
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
        $pages = Pages::all();

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
        $templates = ['1', '2', '3'];

        $parents = Pages::select('parent')->groupBy('parent')->get()->toArray();

        return view('admin.pages.create', compact('templates', 'parents'));
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
        $input = $request->all();
        
        $page = Pages::findOrFail($id);
        
        $page->update($input);

        return redirect('/admin/pages');
    }
    public function updateTemplate(Request $request, $id)
    {
        //
        $page = Pages::findOrFail($id);
        
        $page->update($input);

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
        $page = Page::findOrFail($id);
        $page->delete();

        Session::flash('deleted_page', 'The page has been deleted');

        return redirect('/admin/pages');
    }
}
