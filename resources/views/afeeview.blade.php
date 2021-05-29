@extends("atheme")
@section("content")
<div class="inner-banner"></div>
<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>
<div class="container">
<div class="row mt-4">

  <div class="col">
  <h3 class="title-big mt-4">Fee Payment Details</h3>
        @if(Session::get('done'))
            <div class="alert alert-danger">
            {{Session::get('done')}}
            </div>
        @endif
        @if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
        @endif
  <div class="text-right"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div>
  </div>
</div>

    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
        <table class="table table-dark table-hover " style="display: block;overflow-x: auto;white-space: nowrap;">
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
        <td><a id="hide" href="afeeedit/{{$row['id']}}" class="btn btn-outline-success">Update</a></td>
        <td><a id="hide" href="/afeedelete/{{$row['id']}}" class="btn btn-outline-danger" >Remove</a></td>
    </tr>
    @endforeach
</table>
        </div>
        <div class="col"></div>
    </div>
</div>
<div id="hide">
@endsection