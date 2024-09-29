<?php

namespace Modules\UserAndCourseManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\UserAndCourseManagement\Database\Factories\CourseStudentFactory;

class CourseStudent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): CourseStudentFactory
    // {
    //     // return CourseStudentFactory::new();
    // }
}
