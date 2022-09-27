<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verify;

class VerifyController extends Controller
{
    //

    public function index() {
       return view('test.level');  
    }

    public function view() {
       $name = empty(request()->name) ? 'Не задан' : request()->name;
       $option = empty(request()->option) ? 'Не задан' : request()->option;
       $main = empty(request()->main) ? 'Не задан' : request()->main;
       $time = request()->time;
       $points = empty(request()->points) ? 0 : request()->points;
       if($name && $option && $main && $time && $points) {
       $verify = Verify::create([
         'name'=>$name,
         'subjects'=>$option,
         'main'=>$main,
         'time' => $time,
         'value'=>$points
       ]);
      }
      // return response()->json(request()->all());
    }

    public function result() {
       $results=Verify::paginate(10);
       return view('backend.start.index',compact('results'))->with('i', (request()->input('page', 1) - 1) * 10);;
    }
}
