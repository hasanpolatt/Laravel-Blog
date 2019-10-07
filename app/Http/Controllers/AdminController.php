<?php

namespace App\Http\Controllers;

use App\Ayarlar;

use Illuminate\Support\Facades\Validator;
use Faker\Provider\Image;
use function Sodium\crypto_generichash_update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function get_index()
    {
        return view('backend.index');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
}

