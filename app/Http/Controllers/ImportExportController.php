<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
class ImportExportController extends Controller
{
    //
    public function index(){
        $data = Student::all();
    	return view('importexportxls',compact('data'));
    }
    public function import_xls(Request $request){
    	$this->validate($request, [
	      'upload_xls'  => 'required|mimes:xls,xlsx'
	     ]);
        Excel::import(new StudentImport,$request->file('upload_xls'));


        return redirect('importexport')->with('status', 'Imported Successfully');
    }
    public function export_xls()
    {
        return Excel::download(new StudentExport, 'Student.xlsx');
    }
}
