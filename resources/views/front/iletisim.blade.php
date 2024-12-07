@extends('front.fmaster')

@section('title', 'İletişim -'. $ayar->baslik)

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-7">
                <div class="contact-form">
                    <h2 class="title text-center">BİZİMLE İLETİŞİME GEÇİN</h2>
                    @include('front.mesaj')
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" action="{{route('mesajgonder')}}" class="contact-form row" name="contact-form" method="post">
                        @csrf
                        <div class="form-group col-md-6">
                            <input type="text" name="isim" class="form-control" required="required" placeholder="İsim">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="konu" class="form-control" required="required"
                                   placeholder="Konu">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="telefon" class="form-control" required="required"
                                   placeholder="Telefon">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea type="input" name="mesaj" id="mesaj" required="required" class="form-control" rows="8"
                                      placeholder="Mesajınızı buraya yazın."></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="gonder" class="btn btn-primary pull-right" value="Gönder">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">İLETİŞİM BİLGİLERİMİZ</h2>
                    <address>
                        {{$ayar->iletisim}}
                    </address>

                </div>
            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
