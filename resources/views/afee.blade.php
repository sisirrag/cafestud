@extends("atheme")
@section("content")
<div class="inner-banner"></div>

<div class="container">
@if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
            @endif
<div class="row">
  <div class="col">
  <h3 class="title-big mt-4">Payment Details</h3>
  </div>
</div>
     <form action="/feestore" method="post">
            @csrf
    <section class="w3l-contact-6 py-5" id="contact">
    <div class="contact-info  py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2"></h5>
                <h3 class="title-small  text-center mb-5">Enter Payment Details</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                        <label class="form-field" for="sid">SID</label>
                                <!-- <input type="text" name="sid" id="w3lName" placeholder="e.g. IS123" class="contact-input" /> -->
                                <select class="form-select" aria-label="Default select example" name="sid"> 
                                @foreach($stud as $row)                               
                                <option value="{{$row['sid']}}">{{$row['sid']}}</option>   
                                @endforeach                          
                                </select>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                        <label class="form-field" for="month">Month</label class="form-field" >
                                <select class="form-select" aria-label="Default select example" name="month">
                                <option value="January" selected>January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                                </select>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                        <label class="form-field" for="stat">Status</label class="form-field">
                                <select class="form-select" aria-label="Default select example" name="stat">
                                <option value="Unpaid" selected>Unpaid</option>
                                <option value="Paid">Paid</option>                                
                                </select>
                        </div>
                    </div>
                </div>
                <div class="contacts12-main">
                    <div>
                        <label class="form-field" for="fee">Fee</label>
                        <input type="text" name="fee" id="w3lName" placeholder="₹" class="contact-input" /> 
                    </div>
                    <div >
                        <button class="btn btn-style btn-primary submit">Submit</button>
                    </div>                
                </div>
            </div>
        </div>
</section>
    </form>
</div>

@endsection