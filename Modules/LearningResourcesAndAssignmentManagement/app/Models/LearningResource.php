<?php

namespace Modules\LearningResourcesAndAssignmentManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserAndCourseManagement\Models\Course;

// use Modules\LearningResourcesAndAssignmentManagement\Database\Factories\LearningResourceFactory;

class LearningResource extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title','description','type','file_path','url','course_id'  ];

    protected $hidden =['created_at', 'updated_at'];

    public $with = ['course'];

    public function course(){
    return $this->belongsTo(Course::class);
}


    // protected static function newFactory(): LearningResourceFactory
    // {
    //     // return LearningResourceFactory::new();
    // }
}
