<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        
        
        if (auth::check()) {

            return view('home');
        } else {

            return redirect('/login');
        }
    }
}
