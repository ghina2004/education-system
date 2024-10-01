<?php

namespace Modules\UserAndCourseManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ExamAndEvaluationManagement\Models\Exam;
use Modules\LearningResourcesAndAssignmentManagement\Models\Assignment;
use Modules\LearningResourcesAndAssignmentManagement\Models\LearningResource;

// use Modules\UserAndCourseManagement\Database\Factories\CourseFactory;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','description','teacher_id'];

    public $with = ['learningResources'];

    public function learningResources (){
        return  $this->hasMany(LearningResource::class);

    }
    public function teacher (){
        return  $this->belongsTo(Teacher::class);

    }
    public function courseStudents (){
        return  $this->hasMany(CourseStudent::class);
    }
    public function assignments (){
        return  $this->hasMany(Assignment::class);
    }
    public function exams (){
        return  $this->hasMany(Exam::class);
    }

    // protected static function newFactory(): CourseFactory
    // {
    //     // return CourseFactory::new();
    // }
}
