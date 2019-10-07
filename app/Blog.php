<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='bloglar';

    protected $fillable=['blog_baslik','blog_icerik','blog_yazar','blog_etiket','slug','logom'];
}
