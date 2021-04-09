@extends("theme")
@section("content")

 <div class="container">
  <div class="row">
    <div class="col col-12 col-sm-1 col-md-1 col-lg-1"></div> 
    <div class="col col-12 col-sm-9 col-md-9 col-lg-9">
     <table class="table">
        <tr>
            <th>NAME</th>
            <th>DESIGNATION</th>
            <th>COLLEGE</th>
            <th>CONTACT</th>
        </tr>

        @foreach($faculties as $faculty)

        <tr>
            <td> {{ $faculty->fname }} </td>
            <td>{{ $faculty->fdes }}</td>
            <td>{{ $faculty->fcllg }}</td>
            <td>{{ $faculty->fcontact }}</td>
            <td> <a class = "btn btn-success" href="/faculty/{{$faculty->id}}/edit">EDIT</a></td>
        </tr>

        @endforeach

     </table>
    </div> 
    <div class="col col-12 col-sm-1 col-md-1 col-lg-1"></div> 
  </div>
 </div>

 @endsection
