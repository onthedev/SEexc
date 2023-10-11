<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>รายละเอียดการเช็คชื่อ</title>
    <style>
        .container{
            margin-top: 5em;
        }
        #check_name{
            margin-bottom: 2em;
        }
        .subbtn{
            padding: 7px;
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="container h-screen">
        <h1>เพิ่มการเช็คชื่อ</h1>
        <form method="POST" action="{{ route('addcheckatt') }}">
            @csrf
        <div class="form-group">
            <label id="topic" for="check_name">เรื่อง/งาน</label>
            <input type="text" class="form-control" id="check_name" name="check_name" required>
           </div>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รหัสนักศึกษา</th>
                <th scope="col">ชื่อนักศึกษา</th>
                <th class="text-center" scope="col">มาเรียน</th>
                <th class="text-center" scope="col">สาย</th>
                <th class="text-center" scope="col">ขาด</th>
              </tr>
            </thead>
            @php
                $count = 0;
            @endphp
            @foreach ($Students as $std)
            <tr>
                <td>{{ $count = $count+1}}</td>
                <td>{{ $std->std_id }}</td>
                <td>{{ $std->std_name}}</td>
                <td class="text-center">
                    <input type="radio" id="1" name="status_id[{{ $std->id }}]" value="1">
                    <input type="hidden" name="student_id[{{ $std->id }}]" value="{{ $std->id }}">
                </td>
                <td class="text-center">
                    <input type="radio" id="2" name="status_id[{{ $std->id }}]" value="2">
                    <input type="hidden" name="student_id[{{ $std->id }}]" value="{{ $std->id }}">
                </td>
                <td class="text-center">
                    <input type="radio" id="3" name="status_id[{{ $std->id }}]" value="3">
                    <input type="hidden" name="student_id[{{ $std->id }}]" value="{{ $std->id }}">
                </td>

            </tr>
            @endforeach
        </table>
        <div class="container text-center">
            <input type="hidden" name="course_id" value="{{ $Students[0]->course_id }}">
            <button type="submit" class="btn btn-primary subbtn">ส่ง</button>
        </form>
    </div>
</body>
</html>
