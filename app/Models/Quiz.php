<?php

namespace App\Models;

// Quiz class import for Methods
use App\Models\Question; // Question class import for DB Relation
use App\Models\Quiz;
use App\Models\Answer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description' ];

    // DB Relation
    public function questions(){
        return $this->hasMany(Question::class);
    }

    // Method for store data to dataable
    public function storeQuiz($data){
        return Quiz::create($data);
    }

    // Method for fetch data from database
    public function allQuiz(){
        return Quiz::all();
    }

    // Method for id of the quiz
    public function getQuizById($id){
            return Quiz::find($id);
    }

    public function answers() {
        return $this->HasManyThrough(Answer::class,Question::class);
    }
    // Method for Update quiz
    public function updateQuiz($data, $id){
        return Quiz::find($id)->update($data);
    }
    // Method for delete quiz

    public function deleteQuiz($id){
        return Quiz::find($id)->delete();
    }
}

