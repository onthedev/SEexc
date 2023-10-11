<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ImportExport</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Import Excel / xls / xlsx</h3>
               <form method="POST" action="/importxls" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group row">
                        <label for="Payslip" class="col-md-4 col-form-label text-md-right"><b>{{ __('Excel / xls / xlsx') }}</b></label>
                        <div class="col-md-6">
                            <input type="file" class="form-control form-control-sm" name="upload_xls" onchange="readURL(this);">
                            @if ($errors->has('upload_xls'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('upload_payslip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                  <button type="submit" class="btn btn-success btn-block btn-sm">{{ __('Upload') }}</button>
             </form>
          <br>
          <a href="/exportxls" class="btn btn-info btn-sm" style="color: white;">Export</a><br><br>
                       <div class="table-responsive">
                            <table id="example6" class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                       <th>รหัสนักศึกษา</th>
                                       <th>ชื่อ</th>
                                       <th>อีเมล</th>
                                    </tr>
                               </thead>
                              <tbody>
                             @foreach($data as $key=>$value)
                                <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$value->std_id}}</td>
                                  <td>{{$value->std_name}}</td>
                                  <td>{{$value->std_email}}</td>
                                </tr>
                             @endforeach
                           </tbody>
                       </table>
                     </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</body>
</html>
