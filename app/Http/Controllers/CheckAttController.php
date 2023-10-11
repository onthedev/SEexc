<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Checkatt;

use Illuminate\Http\Request;

class CheckAttController extends Controller
{
    public function checkatt(){
        return view('checkatt');
    }
    public function check_detail(){
        $Students = Student::where('course_id', 2)->get();
        return view('check_detail',['Students'=>$Students]);
    }
    public function addcheckatt(Request $request){
        // รับข้อมูลจากแบบฟอร์ม
    $check_name = $request->input('check_name');
    $course_id = $request->input('course_id');
    $student_ids = $request->input('student_id'); // เป็นอาร์เรย์ของ student_id
    $status_ids = $request->input('status_id'); // เป็นอาร์เรย์ของ status_id

    // ทำการบันทึกข้อมูลเช็คอื่น ๆ ที่คุณต้องการ
    // ตัวอย่าง:
        foreach ($student_ids as $index => $student_id) {
            $status_id = $status_ids[$index];

            $check = new Checkatt;
            $check->check_name = $check_name;
            $check->course_id = $course_id;
            $check->student_id = $student_id;
            $check->status_id = $status_id;
            $check->save();
        }
    }

    public function showCheck(){
        $check = Checkatt::where('status_id', 1)
        ->orWhere('status_id', 2)
        ->get();

        $checkcount = Checkatt::where('status_id', 1)
        ->orWhere('status_id', 2)
        ->count();
        return view('checkatt', compact('check','checkcount'));
    }

}

