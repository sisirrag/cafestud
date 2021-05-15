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
     <form action="afeeupdate" method="post">
            @csrf
    <section class="w3l-contact-6 py-5" id="contact">
    <div class="contact-info  py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2"></h5>
                <h3 class="title-small  text-center mb-5">Update Payment Details</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                            <span>SID</span>
                            <p> {{$info->sid}} </p>
                            <!-- <p>sed at ipsum,  Coffee Cafe Center,</p>
                            <p>Vacaville 10010, USA.</p> -->
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                            <span>Month</span>
                            <p> {{$info->month}} </p> 
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Fee</span>
                            <p>₹ {{$info->fee}} </p>
                        </div>
                    </div>
                </div>
                <div class="contacts12-main">
                        <!-- <div class="input-grids"> -->
                            <div>
                                <!-- <label class="form-field" for="sid">SID</label> -->
                                <input type="text" name="sid" id="w3lName" placeholder="e.g. IS123" class="contact-input" value="{{$info->sid}}" hidden/>
                            </div>
                            <div>
                                <!-- <label class="form-field" for="month">Month</label class="form-field" > -->
                                <select class="form-select" aria-label="Default select example" name="month"hidden>
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
                        <!-- </div> -->
                        <div>
                                <label class="form-field" for="stat">Status</label class="form-field">
                                <select class="form-select" aria-label="Default select example" name="stat" >
                                <option value="Unpaid" selected>Unpaid</option>
                                <option value="Paid">Paid</option>                                
                                </select>
                            </div>

                        <div class="input-grids">
                            <div>
                            <input type="hidden" name="id"  value="{{$info->id}}"/>
                                <!-- <label class="form-field" for="fee">Fee</label> -->
                                <input type="text" name="fee" id="w3lName" placeholder="Rs." class="contact-input"  value="{{$info->fee}}" hidden/>
                            </div>
                            <div>
                            </div>
                            
                        </div>
                        <div >
                            <button class="btn btn-style btn-primary submit" type="submit">Submit</button>
                        </div>
                </div>
            </div>
        </div>
</section>
    </form>
</div>

@endsection