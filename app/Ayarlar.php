<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    protected  $table='ayarlar';
    protected  $fillable=['logo','ayar_mail','ayar_title','ayar_description','ayar_keyword',
        'ayar_facebook','ayar_twitter','ayar_youtue','ayar_face','ayar_insta',
        'ayar_google','ayar_faks','ayar_tel','ayar_recaptcha','ayar_url','ayar_ilce',
        'ayar_il','smtp_user','smtp_pass','smtp_host','smtp_port','created_at','updated_at'];

}
