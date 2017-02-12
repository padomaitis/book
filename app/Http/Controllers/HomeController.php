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
		$newGenre->id = 4;
		$newGenre->GenreName = "Drama";
		$newGenre->save();
		$newbook = new Book();
		$newbook->LongDesc="Mano gyvenimo knyga";
		$newbook->ImgSrc="img/dramabook.png";
		$newbook->Author="John";
		$newbook->year=1986;
		$newbook->id=4;
		$newbook->Name="Mano";
		$newbook->ShortDesc="Mano knyga";
		$newbook->genre_id = 4;
		$newbook->save();
		$books = Book::with('genre')->paginate(1);
	
		return view('welcome',['books'=>$books]);
	}
	
		public function getBookDetails($id)
	{
		$book = Book::with('genre')->where('id',$id)->first();
	
		return view('details',['book'=>$book]);
	}
}

