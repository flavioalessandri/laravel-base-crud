<?php

namespace App\Http\Controllers;

// con use.. utilizzo la classe del MODEL chiamata Pagante

use App\Pagante;

use Illuminate\Http\Request;

class PaganteController extends Controller
{
    public function index(){
      $txt = "ciao";
      return view('pagante', compact('txt'));
    }
}
