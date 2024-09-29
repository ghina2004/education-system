<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\AssignmentFactory;

class Assignment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): AssignmentFactory
    // {
    //     // return AssignmentFactory::new();
    // }
}
