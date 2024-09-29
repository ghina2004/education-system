<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\LearningResourceFactory;

class LearningResource extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): LearningResourceFactory
    // {
    //     // return LearningResourceFactory::new();
    // }
}
