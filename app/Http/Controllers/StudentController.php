<?php

namespace App\Http\Controllers;

use App\Models\student;
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
      /**
       * student create
       */
      public function store(Request $request)
      {
         
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
         ]);
         return back();
      }

    
}


