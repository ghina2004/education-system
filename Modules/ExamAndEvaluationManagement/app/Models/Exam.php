<?php

namespace Modules\ExamAndEvaluationManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;

// use Modules\ExamAndEvaluationManagement\Database\Factories\ExamFactory;

class Exam extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title','date','course_id'];

    public function course(){
        return $this->belongsTo(Course::class);}

    public function Questions(){
        return $this->hasMany(Question::class);}

    // protected static function newFactory(): ExamFactory
    // {
    //     // return ExamFactory::new();
    // }
}
