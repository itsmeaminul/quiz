<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{
        public function admin(){
    	return view('admin.admin_login');
    }

    public function admin_login(){
        return view('admin.admin_home');
    }

    public function all_question(){
    	$show_data = DB::table('question_table')
                    ->get();

        $manage_data = view('admin.all_questions')
                    ->with('show_all_data', $show_data);

        return view('layouts.admin_layout')
                 ->with('layouts.admin_layout', $manage_data);
    }

    public function set_question(){
    	return view('admin.set_question');
    }

    
//save question
    public function save_question(Request $request){
        

        $data=array();
        $data['question_id'] = $request->question_id;
        $data['question1'] = $request->question1;
        $data['a1'] = $request->a1;
        $data['b1'] = $request->b1;
        $data['c1'] = $request->c1;
        $data['d1'] = $request->d1;

        $data['question2'] = $request->question2;
        $data['a2'] = $request->a2;
        $data['b2'] = $request->b2;
        $data['c2'] = $request->c2;
        $data['d2'] = $request->d2;

        $data['question3'] = $request->question3;
        $data['a3'] = $request->a3;
        $data['b3'] = $request->b3;
        $data['c3'] = $request->c3;
        $data['d3'] = $request->d3;


        DB::table('question_table')->insert($data);
        Session::put('exception','Question added successfully!!');
        return Redirect::to('/set_question');
    }

    //question delete method
    public function question_delete($question_id){
        DB::table('question_table')
            ->where('question_id',$question_id)
            ->delete();

        Session::put('exception','Question Deleted successfully!!');
        return Redirect::to('/all_question');
        
    }

    //question edit method
    public function question_edit($question_id){
        $edit_question = DB::table('question_table')
                            ->select('*')
                            ->where('question_id',$question_id)
                            ->first();


        $manage_question = view('admin.edit_questions')
                         ->with('update_info',$edit_question);

        return view('layouts.admin_layout')
                 ->with('admin.edit_question',$manage_question);
        
    }



    public function total_participents(){
    	$show_data = DB::table('user_table')
                    ->get();

        $manage_data = view('admin.total_participents')
                    ->with('show_all_data', $show_data);

        return view('layouts.admin_layout')
                 ->with('layouts.admin_layout', $manage_data);
    }

    public function winners(){
    	return view('admin.winners');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin_home');
    }


}
