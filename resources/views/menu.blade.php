
<ul>
    @foreach($items as $key=>$item)
    <li @if(count($item->children) > 0) class="drop-down" @else @endif><a href="{{ url($item->link()) }}">{{ $item->title }}</a>
        @if(!$item->children->isEmpty())
            @include('menu', ['items' => $item->children])
        @endif
    </li>
    @endforeach
</ul>

