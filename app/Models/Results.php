<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Answer;


class Results extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'question', 'answer_id', 'quiz_id'];

    // Defined Relationship Model Classes
    public function question(){
        return $this->belongsTo(Question::class);
    }
    public function answer(){
        return $this->belongsTo(Answer::class);
    }
}
