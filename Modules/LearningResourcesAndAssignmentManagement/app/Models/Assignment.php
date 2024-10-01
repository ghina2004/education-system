<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;

// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\AssignmentFactory;

class Assignment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title', 'description', 'date', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function assignmentSubmissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    // protected static function newFactory(): AssignmentFactory
    // {
    //     // return AssignmentFactory::new();
    // }
}
