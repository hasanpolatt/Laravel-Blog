@extends('frontend.app')
@section('icerik')
<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="/index">Anasayfa</a></li>
                        <li class="active">Hakkımzda</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Hakkımızda</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <h2 class="word-rotator-title">
            Yazının <strong>
							<span class="word-rotate" data-plugin-options='{"delay": 2000}'>
								<span class="word-rotate-items">
									<span>Birincisi.</span>
									<span>İkincisi.</span>
									<span>Üçüncüsü.</span>
								</span>
							</span>
            </strong>
        </h2>

        <div class="row">
            <div class="col-md-8">
                <h3><strong>Vizyon</strong> Alanı</h3>

            </div>
            <div class="col-md-12">
                <li data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="img/office-2.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4><strong>Vizyon</strong></h4>
                            <p>{{$hakkimizda->hakkimizda_vizyon}} </p>
                    </div>
                </li>
            </div>

        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-md-8">
                <h3><strong>İçerik</strong> Alanı</h3>

            </div>
            <div class="col-md-12">
                <div class="featured-box featured-box-secundary">
                    <div class="box-content">
                        <h4>{{$hakkimizda->hakkimizda_icerik}}</h4>
                        <ul class="thumbnail-gallery flickr-feed" data-plugin-flickr data-plugin-options='{"qstrings": { "id": "93691989@N03" }, "limit": 6}'></ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="tall">



        <div class="row">
            <div class="col-md-8">
                <h3><strong>Biz</strong> Kimiz</h3>

            </div>
            <div class="col-md-12">
                <div class="featured-box featured-box-secundary">
                    <div class="box-content">
                        <h4>{{$hakkimizda->hakkimizda_yazi}}</h4>
                        <ul class="thumbnail-gallery flickr-feed" data-plugin-flickr data-plugin-options='{"qstrings": { "id": "93691989@N03" }, "limit": 6}'></ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@section('css')
    @endsection

@section('js')
    @endsection