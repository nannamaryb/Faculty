@extends("theme")
@section("content")

<div class="class">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12">
<form action="/studentsearch" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>ROLL NO</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">SEARCH</button></td>
</tr>
</table>
</form>
</div>
</div> 
</div>




















@endsection