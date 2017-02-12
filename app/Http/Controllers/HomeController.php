<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends Controller{
	
	public function getBookList(){
	 
		$book = new Book();
		$book->id=10;
		$book->Name="Komedija";
		$book->ShortDesc="Kom";
		$book->LongDesc="Komedija apie tave";
		$book->ImgSrc="img/dramabook.png";
		$book->Author="Jpy";
		$book->year=1999;
		$book->genre_id=6;
		$book->save();
		$books = Book::with('genre')->paginate(5);
	
		return view('welcome',['books'=>$books]);
	}
	
		public function getBookDetails($id)
	{
		$book = Book::with('genre')->where('id',$id)->first();
	
		return view('details',['book'=>$book]);
	}
}

