<?php

namespace App\Http\Controllers;



use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quizzes = (new Quiz())->allQuiz();
        return view('backend.quiz.index', compact('quizzes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());

        // $quiz= new Quiz();
        // $quiz->name= $request['name'];
        // $quiz->description= $request['description'];

    // add other fields
        // $quiz->save();

        // return redirect('/');


        $data = $this->validateForm($request);
        $quiz = (new Quiz)->storeQuiz($data);

        return redirect()->back()->with('message','Quiz Successfully Inserted.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $quiz = (new Quiz)->getQuizById($id);
         return view('backend.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $this->validateForm($request);
        $quiz = (new Quiz)->updateQuiz($data, $id);
        return redirect(route('quiz.index'))->with('message', 'Quiz update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $quiz=Quiz::find($id);
         $quiz->questions()->delete();  
         (new Quiz)->deleteQuiz($id);
         return redirect()->route('quiz.index')->with('message', 'Quiz Deleted Successfully.');
    }


    // Custom
    public function question($id){
        $quizzes = Quiz::with('questions')->where('id',$id)->get();
        return view('backend.quiz.question',compact('quizzes'));
    }


    // validateForm for quiz
    public function validateForm($request){
        return $this->validate($request,[
            'name' => 'required | string',
            'description'=> 'required |min:3 |max:400'
        ]);
    }
}
