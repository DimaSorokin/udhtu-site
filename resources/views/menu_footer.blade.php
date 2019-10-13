
<ul>
    @foreach($items as $key=>$item)
    <li><a href="{{ url($item->link()) }}">{{ $item->title }}</a></li>
    @endforeach
</ul>

