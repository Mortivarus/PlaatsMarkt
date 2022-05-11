<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;


class AdvertController extends Controller
{
    public function index(){
      
        return view('index', [
            'adverts' => Advert::get()
        ]);
    }
}
