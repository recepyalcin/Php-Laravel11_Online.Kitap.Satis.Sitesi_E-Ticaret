<!-- category nav -->
@php
    $parentKategori = \App\Http\Controllers\HomeController::kategorilist()
@endphp

<div class="left-sidebar">
    <h2>Category</h2>

    <ul>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
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
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </ul>
</div>
