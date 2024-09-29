<?php

namespace Modules\ExamAndEvaluationManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\ExamAndEvaluationManagement\Database\Factories\ChoiceFactory;

class Choice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ChoiceFactory
    // {
    //     // return ChoiceFactory::new();
    // }
}
