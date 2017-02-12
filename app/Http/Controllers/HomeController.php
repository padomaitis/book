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
		$book->id=15;
		$book->Name="Orasas";
		$book->ShortDesc="Oran";
		$book->LongDesc="Oransas apie save";
		$book->ImgSrc="img/dramabook.png";
		$book->Author="Orandas";
		$book->year=1999;
		$book->genre_id=8;
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

