@extends('backend.app')
@section('icerik')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Hakkımızda</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <form action="" method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">
                                {{csrf_field()}}
                                {{Form::bsText('hakkimizda_vizyon','Vizyon',$hakkimizda->hakkimizda_vizyon)}}

                                {{Form::bsText('hakkimizda_misyon','Misyon',$hakkimizda->hakkimizda_misyon)}}

                                {{Form::bsText('hakkimizda_yazi','Yazı',$hakkimizda->hakkimizda_yazi)}}
                                {{Form::bsText('hakkimizda_baslik','Başlık',$hakkimizda->hakkimizda_baslik)}}
                                <div class="form group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="last-name">Açıklama
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control col-md-7 col-xs-12 ckeditor" name="hakkimizda_icerik" cols="30" rows="10">{{$hakkimizda->hakkimizda_icerik}}</textarea>

                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div style="margin-top:10px;" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success"  >Kaydet</button>
                                    </div>
                                </div>
                            </form>




                            <div class="clearfix"></div>


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
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script src="/js/ckeditor/config.js"></script>

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