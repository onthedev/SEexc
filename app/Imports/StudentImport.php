<?php
namespace App\Imports;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([

            'std_id'=>$row['std_id'],
            'std_name'=>$row['std_name'],
            'std_email'=>$row['std_email'],
            'course_id'=>$row['course_id'],
        ]);
    }
}
