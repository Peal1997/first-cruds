@extends('layouts.app')
@section('page-name','Add Student')
@section('sub-title-page', 'Insert Student in our database')
@section('main-content')
<div class="user-form w-25 mx-auto my-5">
    <a class="btn btn-primary" href="{{route('student.index')}}" >All teachers</a>
        <div class="card h-25 shadow ">
       
            <div class="card-header">
                <h1 calss ="card-title">Create teachers account</h1>
            </div>
            <div class="card-body">
                <hr>
                @if ($errors -> any())


                @foreach ($errors -> all() as $err)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{$err}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endforeach
                
                
                    
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                <form class="" action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class = "form-label" for="name">Name </label>
                        <input name="name" type ="text" id ="name" value="{{old('name')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="email">Email </label>
                        <input name="email" type ="text" id ="email" value="{{old('email')}}" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="salary">Cell</label>
                        <input name="cell" type ="text" id ="salary" value="{{old('cell')}}" class="form-control">
                    </div>
                   
                    <br>
                    <div class="form-group">
                       <input name="photo" type ="file" > 
                       
                    </div>
                    <br>
                   
                    <div class="form-group">
                       <input class ="btn btn-primary" name="submit" type ="submit" valeu="submit" > 
                       
                    </div>
                    <div class="card-footer">
                        <h1>It is card footer</h1>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
