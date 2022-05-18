<?php

namespace App\Http\Controllers;

use App\Models\student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * show all student
     */

     public function index()
     {
         return view('index');
     }
     /***
      * show student
      */
     public function show($id)
     {
         return view('single');
     }
     /**
      * add a student
      */
     public function add()
     {
         return view('create');
     }
     /**
      * edit 
      */
      public function edit($id)
      {
         return view('edit');
      }
      /*
       * student create
       */
      public function store(Request $request)
      {
          //form validation
          $this -> validate($request, [
              'name' => 'required',
              'email' => 'required|email|unique:students',
              'cell' => 'required|starts_with:01,8801,+8801|unique:students',
          ]);
         //image upload
          if($request -> hasfile('photo')) {
                 $img = $request -> file('photo');
                 $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
                 $img -> move(public_path('photos'),$file_name);
          
          }else {
            $file_name = NULL;
          }
         student::create([
            'name'  => $request -> name,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'photo' => $file_name,
         ],);
         //return back
         return back() -> with('success','Student created successfully');
      }

    
}


