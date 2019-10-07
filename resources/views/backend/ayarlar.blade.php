@extends('backend.app')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>General Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">

            <div class="x_content">

                <form method="post"id="form" data-parsley-validate class="form-horizontal form-label-left">


                    {{csrf_field()}}



                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#genel_ayarlar" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel Ayarlar</a>
                        </li>
                        <li role="presentation" class=""><a href="#iletisim_ayarlar" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">İletişim Ayarlar</a>
                        </li>
                        <li role="presentation" class=""><a href="#sosyal_medya" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal Medya</a>

                        <li role="presentation" class=""><a href="#google_api" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Google API</a>

                        <li role="presentation" class=""><a href="#mail_ayarlar" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Mail Ayarları</a>

                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="genel_ayarlar" aria-labelledby="home-tab">
                            <div class="form group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="last-name">Mevcut Logo</label>
                                <div  class="col-md-12 col-sm-6 col-xs-12">
                                    <img style="margin-left:254px; margin-bottom:20px;" src="/uploads/img/{{$ayarlar->logo}}" alt="" >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                       for="last-name">Site Logo</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" class="form-control col-md-7 col-xs-12"
                                       name="logo">
                                    <input type="hidden" name="eski_logo" value="{{$ayarlar->logo}}">

                            </div>
                            </div>


                            {{Form::bsText('ayar_title','Site Başlık',$ayarlar->ayar_title)}}


                            {{Form::bsText('ayar_description','Site Descriotion',$ayarlar->ayar_description)}}

                            {{Form::bsText('ayar_keyword','Site Keyword',$ayarlar->ayar_keyword)}}

                            {{Form::bsText('ayar_url','Site Adres',$ayarlar->ayar_url)}}




                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="iletisim_ayarlar" aria-labelledby="profile-tab">



                            {{Form::bsText('ayar_tel','Telefon Numarası',$ayarlar->ayar_tel)}}




                            {{Form::bsText('ayar_faks','Faks',$ayarlar->ayar_faks)}}







                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="sosyal_medya" aria-labelledby="profile-tab">


                            {{Form::bsText('ayar_google','Google Adres',$ayarlar->ayar_google)}}

                            {{Form::bsText('ayar_insta','İnstagram Adres',$ayarlar->ayar_insta)}}

                            {{Form::bsText('ayar_facebook','Facebook Adres',$ayarlar->ayar_facebook)}}
                            {{Form::bsText('ayar_twitter','Twitter Adresi',$ayarlar->ayar_twitter)}}
                                    
                        </div>



                        <div role="tabpanel" class="tab-pane fade " id="google_api" aria-labelledby="home-tab">
                            <p>google api ayarlari.</p>
                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="mail_ayarlar" aria-labelledby="profile-tab">
                            {{Form::bsText('smtp_host','SMTP Host',$ayarlar->smtp_host)}}
                            {{Form::bsPassword('smtp_pass','SMTP Şifre',$ayarlar->smtp_pass)}}
                            {{Form::bsText('smtp_port','SMTP Port',$ayarlar->smtp_port)}}
                        </div>



                    </div>
                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success"  >Kaydet</button>
                                        </div>
                                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
        </div>
    </div>


    @endsection


@section('css')
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
@endsection

@section('js')

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/sweetalert.js"></script>
    <script>
        $(document).ready(function() {

            $('#form').ajaxForm(function(response) {

                swal(
                    response.baslik,
                    response.icerik,
                    response.durum
                )

            });
        });
    </script>
@endsection
