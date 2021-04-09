@extends("theme")
@section("content")

 <div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-1 col-lg-1"></div>
        <div class="col col-sm-12 col-md-9 col-lg-9">
        <table class="table">
            <tr>
                <th>BUS NO</th>
                <th>ROUTE</th>
                <th>DRIVER NAME</th>
            </tr>

            @foreach($buses as $bus)
            <tr>
                <td> {{ $bus->bno }} </td>
                <td> {{ $bus->broute }} </td>
                <td> {{ $bus->bdrivername }} </td>

            </tr>
            @endforeach
        </table>
        </div>
        <div class="col col-sm-12 col-md-1 col-lg-1"></div>
    </div>
 </div>
 
 @endsection