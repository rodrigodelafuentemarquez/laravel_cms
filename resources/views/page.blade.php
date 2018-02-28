@switch($page->template)
    @case(1)
        {!!view('templates.01preparada.index', compact('page'))!!}
    @break
@endswitch