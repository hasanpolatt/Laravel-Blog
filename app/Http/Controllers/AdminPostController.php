<?php

namespace App\Http\Controllers;
use Illuminate\Session\Store;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Ayarlar;
use App\blog;
use App\Hakkimizda;
use Illuminate\Support\Facades\Validator;
use Faker\Provider\Image;
use function Sodium\crypto_generichash_update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;


class AdminPostController extends AdminController
{

    public function post_ayarlar(Request $request)
    {
        $file = $request->all();
        if (isset($file['logo'])) {
            $validator = Validator::make($file, [
                'logo' => 'mimes:jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF|max:2048',
            ]);

            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Geçersiz dosya formatı']);
            }

            $logo = Input::file('logo');
            $logo_uzanti = Input::file('logo')->getClientOriginalExtension();
            $logo_isim = 'logo.' . $logo_uzanti;

            Storage::disk('uploads')->makeDirectory('img');
            \Image::make($logo->getRealPath())->resize(222, 128)->save('uploads/img/' . $logo_isim);
        }

        try {
            unset($file['_token']);
            if (isset($file['logo'])) {
                $file['logo'] = $logo_isim;
                unset($file['eski_logo']);
            } else {
                $file['logo'] = $file['eski_logo'];
                unset($file['eski_logo']);
            }
            Ayarlar::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'Başarılı', 'icerik' => 'Kayıt başarı ile yapıldı']);
        } catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Kayıt yapılamadı']);
        }

    }


    public function post_hakkimizda(Request $request)
    {
        $val=$request->all();
        try {
            unset($val['_token']);
            Hakkimizda::where('id',1)->update($val);
            return response({'durum'=>'succes','baslik'=>'Başarılı','icerik'=>'Kayit Başarıyla Yapıldı']);
        }catch(\Exception $ex) {
                return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Kayıt yapılamadı']);

            }

    }
    public function post_blog_ekle(Request $request){
        $file = $request->all();
        if (isset($file['logom'])) {
            $validator = Validator::make($file, [
                'logom' => 'mimes:jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF|max:2048',
            ]);

            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Geçersiz dosya formatı']);
            }

            $logom = Input::file('logom');
            $logo_uzanti = Input::file('logom')->getClientOriginalExtension();
            $logo_isim = 'logom.' . $logo_uzanti;

            Storage::disk('uploads')->makeDirectory('img');
            \Image::make($logom->getRealPath())->resize(222, 128)->save('uploads/img/' . $logo_isim);
        }

        try {
            unset($file['_token']);
            if (isset($file['logom'])) {
                $file['logom'] = $logo_isim;
                unset($file['eski_logom']);
            } else {
                $file['logom'] = $file['eski_logom'];
                unset($file['eski_logom']);
            }
            Blog::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'Başarılı', 'icerik' => 'Kayıt başarı ile yapıldı']);
        } catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Kayıt yapılamadı']);
        }

    }









}


