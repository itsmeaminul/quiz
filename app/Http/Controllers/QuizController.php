<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class QuizController extends Controller
{
    public function abc(){
    	return view('abc');
    }

    public function welcome(){
        $data = DB::table('quiz_table')
                    ->get();

         $manage = view('welcome')
                         ->with('all_data',$data);

         return view('layouts.layout')
                 ->with('layouts.layout',$manage);
    }

    public function welcome2(){
    	$data = DB::table('quiz_table')
                    ->get();

         $manage = view('welcome2')
                         ->with('all_data',$data);

         return view('layouts.layout')
                 ->with('layouts.layout',$manage);
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }

    public function winner(){
    	return view('winner');
    }



    public function save_answer(Request $request){
        

        $data=array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;


        DB::table('user_table')->insert($data);
        Session::put('exception','Notice added successfully!!');
        return Redirect::to('/');
    }
}
