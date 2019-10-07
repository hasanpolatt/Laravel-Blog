<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Hakkimizda;
use Illuminate\Http\Request;

class HomeGetController extends Controller
{
    public function get_index() {
        return view('frontend.index');


    }
    public function get_index_yonlendir() {
        return redirect('/');
    }
    public function get_iletisim() {
        $ayarlar = Ayarlar::where('ayar_id', 1)->select('ayarlar.*')->first();

        return view('frontend.iletisim')->with('ayarlar',$ayarlar);
        return view(frontend.app)->with('ayarlar',$ayarlar);
    }

    public function get_hakkimizda() {
        $hakkimizda=Hakkimizda::where('hakkimizda_id',1)->select('hakkimizda.*')->first();
        return view('frontend.hakkimizda')->with('hakkimizda',$hakkimizda);
    }
    public function get_blog(){
        return view('frontend.blog');
    }
    public function get_blog_detay(){
        return view('frontend.blog-detay');
    }
}
