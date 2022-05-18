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
         $data = student::all();
         return view('index',[
             'all_data' => $data,
         ]);
     }
     /***
      * show student
      */
     public function show($id)
     {
         $data = student::find($id);
         return view('single',[
              'student' => $data
         ]);
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
          ],[

            'name.required' => 'নামের ঘরটি পূরণ করুন',
            'email.required' => 'ইমেইলের  ঘরটি পূরণ করুন ',
            'cell.required' => 'সেলের ঘরটি পূরণ করুন ',
            'email.unique' => 'ইমেইলটি নিয়ে নেওয়া হয়েছে ',
            'cell.unique' => 'সেলটি নিয়ে নেওয়া হয়েছে',
            'email.email' => 'ইমেইলটি সঠিক নয়',
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
         ]);
         //return back
         return back() -> with('success','Student created successfully');
      }
        public function destroy($id)
        {
            $data = student::find($id);
            $data -> delete();
            return back() -> with('success',"Data deleted");
        }
    
}


