<?php

namespace App\Http\Controllers;

use App\Models\imagens;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = imagens::all();
        return view('welcome',['data' => $data]);
    }
}
