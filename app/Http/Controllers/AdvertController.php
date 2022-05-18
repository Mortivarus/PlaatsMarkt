<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Gate;



class AdvertController extends Controller
{
    public function index(){
      
        return view('index', [
            'adverts' => Advert::get()
        ]);
    }

    public function view(Advert $advert){
        return view('components/adverts/advert', [
            'advert' => $advert
        ]);
    }

    public function create(){
        return;
    }

    public function store(StorePostRequest $request){
        return;
    }

    public function edit(Avert $advert){
        return;
    }

    public function update(Avert $advert, StorePostRequest $request){
        return;
    }

    public function destroy(Avert $advert){
        return;
    }





}
