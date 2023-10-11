<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'std_id',
        'std_name',
        'std_email',
        'course_id',
        ];
}
