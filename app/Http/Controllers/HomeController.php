<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends Controller{
	
	public function getBookList(){
	 
		$genre = new Genre();
		$genre->id=8;
		$genre->GenreName="Komedija";
		$genre->save();
		$books = Book::with('genre')->paginate(5);
	
		return view('welcome',['books'=>$books]);
	}
	
		public function getBookDetails($id)
	{
		$book = Book::with('genre')->where('id',$id)->first();
	
		return view('details',['book'=>$book]);
	}
}

