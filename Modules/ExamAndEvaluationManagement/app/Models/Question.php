<?php

namespace Modules\ExamAndEvaluationManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\ExamAndEvaluationManagement\Database\Factories\QuestionFactory;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['exam_id','type','question_text'];
   public function Choices(){
    return $this->hasMany(Choice::class);}

    public function StudentAnswers(){
        return $this->hasMany(StudentAnswer::class);}


    public function exam(){
        return $this->belongsTo(Exam::class);}

    // protected static function newFactory(): QuestionFactory
    // {
    //     // return QuestionFactory::new();
    // }
}
