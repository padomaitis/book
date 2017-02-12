@include('include.header')

		@foreach ($books as $book)
		
			<div class='col-sm-3 col-lg-3 col-md-3'>
				<div class='thumbnail'>
					<img src="{{URL::asset($book->ImgSrc)}}" alt='' />
					<div class='caption'>
						<h3 class='pull-right'>{{$book->year}}</h3>
						<h3>
							<a href="{{route('home.details',['id'=>$book->id])}}">{{$book->Name}}</a>
						</h3>
					   
						<p>
						{{$book->genre->GenreName}}
						</p>
					</div>
				</div>
			</div>
			
		@endforeach
		<div style="clear:both"></div>
		{{$books->links()}}
@include('include.footer')

