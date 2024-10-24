@section('content')
<h1>New Products</h1>
<div class="product_box">
    <h3>Ut eu feugiat</h3>
    <a href="{{url('/')}}temps\templatemo_books\productdetail.html"><img src="{{url('/')}}temps\templatemo_books\images/product/01.jpg" alt="Shoes 1" /></a>
    <p>Nulla rutrum neque vitae erat condimentum eget malesuada.</p>
    <p class="product_price">$ 100</p>
    <a href="{{url('/')}}temps/templatemo_books/shoppingcart.html" class="addtocart"></a>
    <a href="{{url('/')}}temps/templatemo_books/productdetail.html" class="detail"></a>
</div>
<div class="product_box">
    <h3>Sohbet ve lise</h3>
    <a href="{{url('/')}}temps/templatemo_books/productdetail.html"><img src="{{url('/')}}temps/templatemo_books/images/product/02.jpg" alt="Shoes 2" /></a>
    <p>Sed congue, erat id congue vehicula. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
    <p class="product_price">$ 80</p>
    <a href="{{url('/')}}temps/templatemo_books/shoppingcart.html" class="addtocart"></a>
    <a href="{{url('/')}}temps/templatemo_books/productdetail.html" class="detail"></a>
</div>
<div class="product_box no_margin_right">
    <h3>Mauris consectetur</h3>
    <a href="productdetail.html"><img src="{{asset('assets/front/images/product/03.jpg')}}" alt="Shoes 3" /></a>
    <p>Morbi non risus vitae est vestibulum tincidunt ac eget metus.</p>
    <p class="product_price">$ 60</p>
    <a href="shoppingcart.html" class="addtocart"></a>
    <a href="productdetail.html" class="detail"></a>
</div>

<div class="cleaner"></div>

<div class="product_box">
    <h3>Proin volutpat</h3>
    <a href="productdetail.html"><img src="{{asset('assets')}}images/product/04.jpg" alt="Shoes 4" /></a>
    <p>Sed semper euismod dolor sit amet interdum. Phasellus in mi eros.</p>
    <p class="product_price">$ 220</p>
    <a href="shoppingcart.html" class="addtocart"></a>
    <a href="productdetail.html" class="detail"></a>
</div>
<div class="product_box">
    <h3>Aenean tempus</h3>
    <a href="productdetail.html"><img src="{{asset('assets')}}images/product/05.jpg" alt="Shoes 5" /></a>
    <p>Maecenas porttitor erat quis leo pellentesque molestie.</p>
    <p class="product_price">$ 180</p>
    <a href="shoppingcart.html" class="addtocart"></a>
    <a href="productdetail.html" class="detail"></a>
</div>
<div class="product_box no_margin_right">
    <h3>Nulla luctus urna</h3>
    <a href="productdetail.html"><img src="{{asset('assets')}}images/product/06.jpg" alt="Shoes 6" /></a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p class="product_price">$ 160</p>
    <a href="shoppingcart.html" class="addtocart"></a>
    <a href="productdetail.html" class="detail"></a>
</div>
</div>
<div class="cleaner"></div>
@endsection
