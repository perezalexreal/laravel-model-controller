<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PageController extends Controller
{
    public function index(){

    $data = Movie::all();
    

        return view('movies', compact("data"));
    }
}
