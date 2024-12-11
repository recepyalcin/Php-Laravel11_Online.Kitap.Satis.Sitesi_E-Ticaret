@extends('front.fmaster')

@section('title', $data->ad ." Detay")

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
                        <h2 class="title text-center">{{$data->ad}}</h2>

                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-4">
                                <div class="view-product">
                                    <img src="{{Storage::url($data->resim)}}"  alt=""/>
                                    <h3>ZOOM</h3>
                                </div>
                                <div id="similar-product" class="carousel slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            @foreach($last as $rs)
                                                <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}">
                                                    <img src="{{Storage::url($rs->resim)}}" width="60" alt=""/> </a>
                                            @endforeach
                                        </div>

                                        <div class="item">
                                            @foreach($last1 as $rs)
                                                <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}">
                                                    <img src="{{Storage::url($rs->resim)}}" width="60" alt=""/> </a>
                                            @endforeach
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    <a class="left item-control" href="#similar-product" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right item-control" href="#similar-product" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <h2>{{$data->ad}}</h2>
                                    <img src="images/product-details/rating.png" alt=""/>
                                    <span>
									<span>{{$data->satis_fiyat}} ₺</span>
									<label>Miktar:</label>
                                        <input type="number" min="1" max="10" value="1"/>

									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
								</span>
                                    <div class="form-group">
                                        <textarea
                                            class="col-lg-12"
                                            rows="20"
                                            id="kitapdetay"
                                            name="kitapdetay">{{$data->detay}}</textarea>
                                    </div>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->


                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">TAVSİYE EDİLEN</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach($last2 as $rs)
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">

                                                            <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}">
                                                                <img src="{{Storage::url($rs->resim)}}" height="200"
                                                                     alt=""/> </a>

                                                            <h2>{{$rs->satis_fiyat}} ₺</h2>
                                                            <p>{{$rs->ad}}</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Sepete Ekle
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="item">
                                        @foreach($last3 as $rs)
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">

                                                            <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}">
                                                                <img src="{{Storage::url($rs->resim)}}" height="200"
                                                                     alt=""/> </a>

                                                            <h2>{{$rs->satis_fiyat}} ₺</h2>
                                                            <p>{{$rs->ad}}</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Sepete Ekle
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel"
                                   data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel"
                                   data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div><!--features_items-->
            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
