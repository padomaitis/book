<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends Controller{
	
	public function getBookList(){
		$newGenre = new Genre();
		$newGenre->GenreName = "Drama";
		$newGenre->save();
		$newbook =>new Book();
		$newbook->Name="Mano";
		$newbook->ShortDesc="Mano knyga";
		$newbook->genre_id = 1;
		$newbook->save();
		$books = Book::with('genre')->paginate(1);
	
		return view('welcome',['books'=>$books]);
	}
	
		public function getBookDetails($id)
	{
		$book = Book::with('genre')->where('BookId',$id)->first();
	
		return view('details',['book'=>$book]);
	}
}

