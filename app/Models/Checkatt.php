<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkatt extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'checkatts'; // ชื่อตารางในฐานข้อมูล

    // คอลัมน์ที่สามารถรับค่า
    protected $fillable = [
        'check_name',
        'status_id',
        'course_id',
        'student_id',
    ];

    // ตรวจสอบ Validation Rules สำหรับการบันทึกข้อมูล
    public static $rules = [
        'check_name' => 'required|string',
        'status_id' => 'required|integer', // ระบุ Validation Rules สำหรับ 'status_id'
        'course_id' => 'required|integer',
        'student_id' => 'required|integer',
    ];
}
