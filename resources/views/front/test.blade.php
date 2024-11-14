<!-- category nav -->

@php

        $parentKategori = \App\Http\Controllers\HomeController::kategorilist()
@endphp


@foreach($parentKategori as $rs)
    <li  class="panel-collapse collapse">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->ad}} <i class="fa fa-angle-right"></i></a>
        <div class="panel-body">

            @if(count($rs->children))
                @include('front.kategoritree',['children' => $rs->children])
            @endif

        </div>
    </li>
@endforeach
