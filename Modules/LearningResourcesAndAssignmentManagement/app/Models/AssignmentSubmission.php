<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\AssignmentSubmissionFactory;

class AssignmentSubmission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): AssignmentSubmissionFactory
    // {
    //     // return AssignmentSubmissionFactory::new();
    // }
}
