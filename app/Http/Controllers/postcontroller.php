<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    //
    public function showBrochure(){
        return view('brochure');

    }
    public function showClints(){
        return view('clints');
    }
    
    public function showCompay(){
        return view('compay');
    }
    public function showCompleted(){
        return view('completed');
    }
    public function showContact(){
        return view('contact_us');
    }
    public function showGellery(){
        return view('gellery');
    }
    public function showMinsters(){
        return view('minsters');
    }
    public function showOnGoing(){
        return view('on_going');
    }
    public function showProduct(){
        return view('product');
    }
    public function showQualitPolicy(){
        return view('qualit_policy');
    }
    public function showRaquesta(){
        return view('raquesta');
    }
    public function showTeam(){
        return view('team');
    }

}
