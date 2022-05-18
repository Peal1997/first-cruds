@extends('layouts.app')
@section('main-content')
		
<div id="card" class="card shadow">
	<div class="card-body">
		<div class="single-user">
			<img class="shadow-sm" src="{{url('photos/' . $student -> photo )}}" alt="" >
			<h2>{{$student -> name}}</h2>
			<h3>{{$student -> email}}</h3>
			<h3>{{$student -> cell}}</h3>
			<a class ="btn btn-primary" href="{{route('student.index')}}" >Back</a>
   
		</div>
	</div>
</div>
     
@endsection

@section('page-name','Peal Hasan')
@section('sub-title-page', 'See about Peal')
	<!-- JS FILES  -->

	

