@section('content')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">ÖNERİLEN KİTAPLAR</h2>

                <div class="product-image-wrapper">
                    @foreach($daily as $rs)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}"> <img src="{{Storage::url($rs->resim)}}" height="290" alt="" /> </a>
                                        <h2>{{$rs->satis_fiyat}} ₺</h2>
                                        <p>{{$rs->ad}}</p>
                                        <form action="{{route('user_sepet_ekle',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input name="miktar" type="hidden" value="1">
                                            <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div><!--features_items-->


        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @foreach($daily as $rs)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}"> <img src="{{Storage::url($rs->resim)}}" alt="" /> </a>
                                        <h2>{{$rs->satis_fiyat}} ₺</h2>
                                        <p>{{$rs->ad}}</p>
                                        <form action="{{route('user_sepet_ekle',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input name="miktar" type="hidden" value="1">
                                            <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                        @foreach($last as $rs)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}"> <img src="{{Storage::url($rs->resim)}}" alt="" /> </a>
                                        <h2>{{$rs->satis_fiyat}} ₺</h2>
                                        <p>{{$rs->ad}}</p>
                                        <form action="{{route('user_sepet_ekle',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input name="miktar" type="hidden" value="1">
                                            <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                            @foreach($last as $rs)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{route('kitap', ['id'=> $rs->id, 'slug'=>$rs->slug])}}"> <img src="{{Storage::url($rs->resim)}}" alt="" /> </a>
                                        <h2>{{$rs->satis_fiyat}} ₺</h2>
                                        <p>{{$rs->ad}}</p>
                                        <form action="{{route('user_sepet_ekle',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input name="miktar" type="hidden" value="1">
                                            <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->





@endsection
