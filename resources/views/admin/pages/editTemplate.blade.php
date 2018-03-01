@switch($page->template)
    @case(1)
        {!!view('templates.01edit.index', compact('page'))!!}
    @break
@endswitch