<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $Movies = Movie::all();

        dd($Movies);
        return (view('homepage'));
    }
}
