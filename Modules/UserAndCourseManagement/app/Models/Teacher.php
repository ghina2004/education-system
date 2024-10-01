<?php

namespace Modules\UserAndCourseManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\UserAndCourseManagement\Database\Factories\TeacherFactory;

class Teacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','email'];

    public $with = ['courses'];

    public function courses (){
        return  $this->hasMany(Course::class);
    }

    // protected static function newFactory(): TeacherFactory
    // {
    //     // return TeacherFactory::new();
    // }
}
