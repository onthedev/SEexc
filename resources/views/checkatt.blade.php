<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/checkatt.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container rounded bg-white">
        <div class="header">
            <h2>เช็คชื่อเข้าเรียน</h2>
            <div class="action">
                <a href="{{ route('check_detail') }}" class="btn btn-success"><img height="15" width="15" src="{{ asset('pics/plus.svg') }}" alt="My SVG Image">
                    เพิ่มการเช็คชื่อ</a>
                <a href="#" class="btn btn-primary"><img height="15" width="15" src="{{ asset('pics/sum.svg') }}" alt="My SVG Image">
                    สรุปการมาเรียน</a>
                <a href="#" class="btn btn-primary"><img height="15" width="15" src="{{ asset('pics/import.svg') }}" alt="My SVG Image">
                    เพิ่ม/นำเข้ารายชื่อ</a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">เรื่อง/งาน</th>
                <th scope="col">เข้าเรียน(คน)</th>
                <th scope="col">ช่วงเวลาที่เช็ค</th>
                <th scope="col">สร้างเมื่อ</th>
              </tr>
            </thead>
            @foreach ($check as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->check_name}}</td>
                    <td>{{$checkcount}}</td>
                    <td>{{$c->updated_at }}</td>
                    <td>{{$c->created_at }}</td>
                </tr>
            @endforeach
          </table>
    </div>
</body>
</html>
