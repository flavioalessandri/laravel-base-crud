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
      return view('paganti.pagante', compact('paganti', 'txt'));
    }

    public function show($id){
      $pagante=Pagante::findOrFail($id);

      return view('paganti.pagante-show', compact('pagante'));
    }
}
