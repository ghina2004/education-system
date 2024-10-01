<?php

namespace Modules\UserAndCourseManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ExamAndEvaluationManagement\Models\StudentAnswer;
use Modules\LearningResourcesAndAssignmentManagement\Models\AssignmentSubmission;

// use Modules\UserAndCourseManagement\Database\Factories\StudentFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','email','email_verified_at','password'];

    public $hidden =['password','created_at', 'updated_at',];

   public function courseStudents (){
    return  $this->hasMany(CourseStudent::class);

}
    public function assignmentSubmission (){
        return  $this->hasMany(AssignmentSubmission::class);

    }
   public function StudentAnswers(){
    return $this->hasMany(StudentAnswer::class);}

    // protected static function newFactory(): StudentFactory
    // {
    //     // return StudentFactory::new();
    // }
}
