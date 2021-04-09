@extends("theme")
@section("content")

    <div class="container">
     <div class="row">
       <div class="col">
       <form action="/studentread" method="post">

        {{ csrf_field() }}

       <table class="table">
            <tr>
                <td>Name</td>
                <td><input name="sname" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Roll no</td>
                <td><input name="srollno" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Admission no</td>
                <td><input name="sadmission" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>College</td>
                <td><input name="scllg" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success">SUBMIT</button></td>
            </tr>
       </table>  
       </form>
       </div>
     </div>
    </div>
    @endsection