<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class CreateController extends Controller
{
    public function index(){
		return view('form');
	}
	
	 public function create(){
		return view('form');
	}
}
