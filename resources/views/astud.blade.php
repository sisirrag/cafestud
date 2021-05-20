@extends("atheme")
@section("content")
<div class="inner-banner"></div>
<div class="container">
<div class="row">
  <div class="col">
  <h3 class="title-big mt-4">Student Details</h3>
  </div>
</div>
<div class="row mt-4">
  <div class="col">
  </div>
  <br><br>
</div>
  <div class="row mt-4">
    <div class="col">
    <table class="table table-dark table-hover mt-4">
      <thead>        
        <th>SID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>        
      </thead>
      @foreach($students as $row)
        <tr>            
            <td>{{$row['sid']}} </td>
            <td>{{$row['name']}}</td>
            <td>{{$row['email']}}</td>
            <td>{{$row['mob']}}</td>

            <td><a href="userdelete/{{$row['sid']}}" class="btn btn-outline-danger">Remove</a></td>
        </tr>
      @endforeach
      
    </table>
    </div>
  </div>
</div>

@endsection