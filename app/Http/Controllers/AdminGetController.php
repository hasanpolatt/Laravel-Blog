<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Blog;
use App\Hakkimizda;
use Illuminate\Support\Facades\Validator;
use Faker\Provider\Image;
use function Sodium\crypto_generichash_update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AdminGetController extends AdminController
{
    public function get_index()
    {
        return view('backend.index');

    }
    public function get_ayarlar()
    {


        $ayarlar = Ayarlar::where('ayar_id', 1)->select('ayarlar.*')->first();
        return view('backend.ayarlar')->with('ayarlar', $ayarlar);
    }
    public function get_hakkimizda() {

    }
    public function get_blog()
    {
        $bloglar=Blog::all();
        return view('backend.blog')->with('bloglar',$bloglar);
    }


}
