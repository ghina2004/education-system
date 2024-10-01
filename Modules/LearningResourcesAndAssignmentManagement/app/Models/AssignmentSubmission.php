<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;
use Modules\UserAndCourseManagement\Models\Student;

// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\AssignmentSubmissionFactory;

class AssignmentSubmission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['student_id','assignment_id','file_path'];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // protected static function newFactory(): AssignmentSubmissionFactory
    // {
    //     // return AssignmentSubmissionFactory::new();
    // }
}
