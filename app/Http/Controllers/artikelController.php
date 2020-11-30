<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    function index(){
    	return view('artikel');
    }
}
