@extends("theme")
@section("content")

<div class="container">
     <div class="row">
       <div class="col">
       <form action="/busread" method="post">

       {{ csrf_field() }}

       <table class="table">
            <tr>
                <td>Bus no</td>
                <td><input name="bno" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Route</td>
                <td><input name="broute" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Driver name</td>
                <td><input name="bdrivername" type="text" class="form-control"></td>
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