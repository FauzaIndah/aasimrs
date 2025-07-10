<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use App\Models\SambutanModel;
use Illuminate\Http\Request;

class IndentitasController extends Controller
{
    public function index(){
        $identitas = IdentitasModel::get();
        return view ('front.identitas.index',compact('identitas'));
    }
    public function sambutan() {
    $sambutan = SambutanModel::get();
    return view('front.identitas.sambutan', compact('sambutan'));
}
}