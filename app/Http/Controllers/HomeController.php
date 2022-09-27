<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;
    public function __construct()
    {
        // $this->middleware('auth');

        $this->user=is_int(User::pluck('is_admin')->search(1)) ? true : false;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.index');
    }

    public function main()
    {
          $user=$this->user;
        
        return view('layouts.master',compact('user'));
    }
    public function test() {

        //  echo json_encode($quizzes, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
        //     dump(json_decode($requests,JSON_UNESCAPED_UNICODE));
        $user = $this->user;
        $quizzes = Quiz::all();
        return view('test.master',compact('user','quizzes'));
    }     

    public function respon($name) {
        $json=[];
        $quizzes = Quiz::with('questions')->where('name',$name)->get()[0];
           foreach($quizzes->questions as $quiz) {
           $questions = Question::with('answers')->find($quiz->id);
           $question = $questions->answers->where('is_correct',1)[0];
         $json[] =   
                [
                 "id" =>$questions->id,
                 "question"=>$questions->question,
                 "answer"=>$question->answer,
                 "options" =>
                   $questions->answers->pluck('answer')
                ];
        }

        return response()->json($json);
    }
    public function quiz() {
        $user = $this->user;
        return view('test.verify',compact('user'));
    } 

    public function result() {
        $user = $this->user;
        return view('test.layout',compact('user'));
}
}