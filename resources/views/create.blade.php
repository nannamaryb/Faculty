@extends("theme")
@section("content")

    <div class="container">
     <div class="row">
       <div class="col col-sm-12 col-md-12 col-lg-12 ">
     <form action="/facultyread" method="post">

        {{ csrf_field() }}
        
     <table class="table">
        <tr>
            <td>Name</td>
            <td><input name="fname" type="text" class="form-control" ></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input name="fdes" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input name="fcllg" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Contact no</td>
            <td><input name="fcontact" type="number" class="form-control"></td>
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

