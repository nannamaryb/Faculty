@extends("theme")
@section("content")

    <div class="container">
     <div class="row">
       <div class="col col-sm-12 col-md-12 col-lg-12 ">
     <form action="/facultyeditprocess/{{ $faculties->id }}" method="post">

        {{ csrf_field() }}
        
     <table class="table">
        <tr>
            <td>Name</td>
            <td><input value="{{ $faculties->fname }}" name="fname" type="text" class="form-control" ></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input value="{{ $faculties->fdes }}"  name="fdes" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input value=" {{ $faculties->fcllg }}" name="fcllg" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Contact no</td>
            <td><input value=" {{ $faculties->fcontact }}" name="fcontact" type="number" class="form-control"></td>
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

