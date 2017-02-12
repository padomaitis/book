@include('include.header')
<div class="thumbnail">
    <img alt="" src='/book/img/dramabook.png'>
    <div class="caption-full">
        <h3 class="pull-right"></h3>
        <h3>
           <img src="{{URL::asset($book->ImgSrc)}}" alt='' />
        </h3>
        <h4>{{$book->Name}}</h4>
        <p>{{$book->LongDesc}}</p>
		<h4>{{$book->Author}}</h4>
        <a href="" onclick="window.history.back()">Atgal</a>
    </div>
</div>
@include('include.footer')