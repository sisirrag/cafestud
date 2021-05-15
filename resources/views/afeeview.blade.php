@extends("atheme")
@section("content")
<div class="inner-banner"></div>

<div class="container">
<div class="row mt-4">
  <div class="col">
  <h3 class="title-big mt-4">Fee Payment Details</h3>
  </div>
</div>

    <div class="row mt-4">
        
        <div class="col">
        <table class="table table-dark table-hover ">
    <thead>
        <td>SID</td>   
        <td>Month</td>
        <td>Fee</td>
        <td>Status</td>
        <td></td>
        <td></td>
    </thead>
    @foreach($fee as $row)
    <tr>   
        <td>{{$row['sid']}}</td>     
        <td>{{$row['month']}}</td>
        <td>₹{{$row['fee']}}</td>
        <td>{{$row['status']}}</td> 
        <td><a href="afeeedit/{{$row['id']}}" class="btn btn-outline-success">Update</a></td>
        <td><a href="/afeedelete/{{$row['id']}}" class="btn btn-outline-danger">Remove</a></td>
    </tr>
    @endforeach
</table>
        </div>
        
    </div>
</div>
@endsection