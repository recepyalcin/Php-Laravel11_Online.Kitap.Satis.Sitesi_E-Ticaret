@section('fsidebar')
    @php
        $parentKategori = \App\Http\Controllers\HomeController::kategorilist()
    @endphp
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- category nav -->

                    <div class="left-sidebar">
                        <h2>KATEGORİLER</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#akademik">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            AKADEMİK
                                        </a>
                                    </h4>
                                </div>
                                <div id="akademik" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>12, 'slug'=>''])}}">BİLİM </a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>13, 'slug'=>''])}}">EĞİTİM </a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>15, 'slug'=>''])}}">FELSEFE </a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>18, 'slug'=>''])}}">PSİKOLOJİ</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>20, 'slug'=>''])}}">SOSYOLOJİ </a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>21, 'slug'=>''])}}">TARİH </a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>22, 'slug'=>''])}}">TIP </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#cocuk">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            ÇOCUK KİTAPLARI
                                        </a>
                                    </h4>
                                </div>
                                <div id="cocuk" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>25])}}">6-12 YAŞ</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>26, 'slug'=>''])}}">12+ YAŞ</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>27, 'slug'=>''])}}">ÇİZGİ ROMAN</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#edebiyat">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            EDEBİYAT
                                        </a>
                                    </h4>
                                </div>
                                <div id="edebiyat" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>34, 'slug'=>''])}}">ANI</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>36, 'slug'=>''])}}">HİKAYE</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>37, 'slug'=>''])}}">ROMAN</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>38, 'slug'=>''])}}">ŞİİR</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sinav">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            SINAV
                                        </a>
                                    </h4>
                                </div>
                                <div id="sinav" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>40, 'slug'=>''])}}">ALES</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>41, 'slug'=>''])}}">DGS</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>42, 'slug'=>''])}}">LGS</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>43, 'slug'=>''])}}">KPSS</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>44, 'slug'=>''])}}">YDS</a></li>
                                            <li><a href="{{route('kitapkategorileri', ['id'=>45, 'slug'=>''])}}">YKS</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                       data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt=""/>
                        </div><!--/shipping-->

                    </div>
                </div>

@endsection
