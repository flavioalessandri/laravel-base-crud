<?php

namespace App\Http\Controllers;

// con use.. utilizzo la classe del MODEL chiamata Pagante

use App\Pagante;

use Illuminate\Http\Request;

class PaganteController extends Controller
{
    public function index(){

      $paganti = Pagante::all();
      // dd($paganti);
      $txt = "Lista Paganti";
      return view('pagante', compact('paganti', 'txt'));
    }
}
