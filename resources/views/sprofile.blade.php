@extends("stheme")
@section("content")
<div class="inner-banner"></div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/home">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Profile</li>
        </ul>
    </div>
</section>
<section>
<div class="container">
<div class="row">
    
    <div class="col">
    <div class="menu-item">
                            <img src="images/middle.png" alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                    <h5>{{$loggeduserinfo['name']}}</h5>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>{{$loggeduserinfo['email']}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description text-right">
                                    <p>SID: {{$loggeduserinfo['sid']}}</p>
                                </div>
                                <div class="menu-item-description text-right">
                                    <p>Phone: {{$loggeduserinfo['mob']}}</p>
                                </div>
                                <div class="menu-item-description text-right">
                                    <p><a data-bs-toggle="modal" data-bs-target="#cpass" href="/chpass" style="color:darkred">Change Password</a></p>
                                </div>
                            </div>
                        </div> 
    </div>
    
</div>
</div>
</section>
<!-- Modal -->
<!-- <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:orange">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/passup" method="post">
      @csrf
      @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
      <div class="modal-body">
        
        <input type="password" class="form-control" name="pass" placeholder="Enter New Password" required><br>
        <input type="password" class="form-control" name="cpass"placeholder="Re-enter New Password" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div> -->




<!-- Modal -->
<div class="modal fade" id="cpass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:orange">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/passup" method="post">
      @csrf
      @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
      <div class="modal-body">
      <input type="password" class="form-control" name="pass" placeholder="Enter New Password" ><br>
        <input type="password" class="form-control" name="cpass"placeholder="Re-enter New Password" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>                     

@endsection