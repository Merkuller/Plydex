<ul class="contentBreadcrum">
    @forelse($breadcrumbs as $item)
        @if(!$loop->last)
            <li><a href="{{ route($item['url']) }}">{{ $item['text'] }}</a></li>
        @else
            <li>{{ $item['text'] }}</li>
        @endif
    @empty

        <li><a href="{{route('home')}}">ГЛАВНАЯ СТРАНИЦА</a></li>
        <li><a href="{{route('articles')}}">МОНТАЖ</a></li>

    @endforelse

</ul>