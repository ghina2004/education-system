<?php

namespace Modules\ExamAndEvaluationManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;
use Modules\UserAndCourseManagement\Models\Student;

// use Modules\ExamAndEvaluationManagement\Database\Factories\StudentAnswerFactory;

class StudentAnswer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['student_id','question_id','choice_id','answer_text'];
    public function Student(){
        return $this->belongsTo(Student::class);}

    public function Question(){
        return $this->belongsTo(Question::class);}

    public function Choice(){
        return $this->belongsTo(Choice::class);}

    // protected static function newFactory(): StudentAnswerFactory
    // {
    //     // return StudentAnswerFactory::new();
    // }
}
