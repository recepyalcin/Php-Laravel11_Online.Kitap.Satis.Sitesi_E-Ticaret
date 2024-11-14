@foreach($children as $subkategori)
    <ul>
        @if(count($subkategori->children))
            <li >   {{$subkategori->ad}}</li>
            <ul>
                @include('front.kategoritree',['children' => $subkategori->children])
            </ul>

        @else
            <li><a href="#">{{$subkategori->ad}}</a> </li>
        @endif
    </ul>
@endforeach
