@extends("theme")
@section("content")

 <div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-1 col-lg-1"></div>
        <div class="col col-sm-12 col-md-9 col-lg-9">
        <table class="table">
            <tr>
                <th>NAME</th>
                <th>ROLL NO</th>
                <th>ADMISSION NO</th>
                <th>COLLEGE</th>
            </tr>

            @foreach($students as $student)
            <tr>
                <td> {{ $student->sname }} </td>
                <td> {{ $student->srollno }} </td>
                <td> {{ $student->sadmission }} </td>
                <td> {{ $student->scllg }} </td>
            </tr>
            @endforeach
        </table>
        </div>
        <div class="col col-sm-12 col-md-1 col-lg-1"></div>
    </div>
 </div>
 
 @endsection