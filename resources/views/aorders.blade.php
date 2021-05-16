@extends("atheme")
@section("content")
<div class="inner-banner"></div>
<div class="container">
<div class="row">
  <div class="col">
  <h3 class="title-big mt-4">Orders</h3>
  </div>
</div>
<form action="/calc" method="post">
            @csrf
<div class="row mt-4">
  <div class="col">
  <center>Date: <input type="date" name="date"> </center>
  </div>
  <br><br>
</div>
  <div class="row mt-4">
    <div class="col">
    <table class="table table-dark table-hover mt-4">
      <thead>
        
        <th>SID</th>
        <th>Name</th>        
        <th>Total</th>
        <th>#</th>
      </thead>
      @foreach($students as $row)
      
        <tr>            
        
            <td>{{$row['sid']}} </td>
            <td>{{$row['name']}}</td>            
            <td><input class="form-control" name="dtotal[{{$row['sid']}}]" type="text" ></td>  
            <td><button type="submit" class="btn btn-success">Add</button></td>
        
        </tr>
        
      @endforeach
    </table>
    
   
    </div>
  </div>
  </form>
</div>


@endsection