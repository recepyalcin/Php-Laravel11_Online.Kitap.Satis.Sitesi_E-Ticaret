@extends('front.fmaster')

@section('title', $data->ad ." Kitap Listesi")

@section('fheader')
    @include('front.fheader')
@endsection
@section('fsidebar')
    @include('front.fsidebar')
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row">
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">{{$data->ad ." KİTAP LİSTESİ"}}</h2>
                @foreach($datalist as $rs)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}"> <img src="{{Storage::url($rs->resim)}}" alt="" /> </a>
                                <h2>{{$rs->satis_fiyat}} ₺</h2>
                                <p>{{$rs->ad}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>


                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--features_items-->
        </div>
            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
