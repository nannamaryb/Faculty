@extends("theme")
@section("content")

<div class="container">
     <div class="row">
       <div class="col col-sm-12 col-md-12 col-lg-12 ">
     <form action="/bookread" method="post">

        {{ csrf_field() }}
        
     <table class="table">
        <tr>
            <td>Title</td>
            <td><input name="booktitle" type="text" class="form-control" ></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input name="bookauthor" type="text" class="form-control"></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><input name="bookdes" type="text" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Distributer</td>
            <td><input name="bookdist" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input name="bookprice" type="number" class="form-control"></td>
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