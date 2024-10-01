<?php

namespace Modules\ExamAndEvaluationManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;

// use Modules\ExamAndEvaluationManagement\Database\Factories\ChoiceFactory;

class Choice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['question_id','choice_text','is_correct'];

    public function Question(){
        return $this->belongsTo(Question::class);}

    public function StudentAnswers(){
        return $this->hasMany(StudentAnswer::class);}

    // protected static function newFactory(): ChoiceFactory
    // {
    //     // return ChoiceFactory::new();
    // }
}
