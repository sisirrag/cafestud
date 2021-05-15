@extends('atheme')
@section('content')
<div class="inner-banner"></div>
<section class="w3l-contact-6 py-5" id="contact">
    <div class="contact-info  py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">MENU</h5>
                <h3 class="title-big text-center mb-5">{{$info->Day }}</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                            <span>Address</span>
                            <p> 2005 Stokes Isle Apt. 896, dolor sit </p>
                            <p>sed at ipsum,  Coffee Cafe Center,</p>
                            <p>Vacaville 10010, USA.</p>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:mail@examplemail.com"> mail@examplemail.com</a>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:(123) 456-78-90"> (123) 456-78-90</a><br>
                            <a href="tel:(123) 456-78-90"> (+12) 255 456-78-90</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="contacts12-main">
                    <form action="update" method="post" class="signin-form">
                    @csrf
                        <div>
                            <input type="hidden" name="id"  value="{{$info->id}}"/>

                        </div>
                        <div>
                            <label class="form-field" for="w3lSubect">Breakfast</label class="form-field">
                            <input type="text" name="Breakfast" id="w3lSubect" value="{{$info->Breakfast}}" class="contact-input" />
                            <span class="text-danger">@error('Breakfast'){{$message}} @enderror  </span>

                        </div>
                        <div>
                            <label class="form-field" for="w3lSubect">Lunch</label class="form-field">
                            <input type="text" name="Lunch" id="w3lSubect" value="{{$info->Lunch}}" class="contact-input" />
                            <span class="text-danger">@error('Lunch'){{$message}} @enderror  </span>

                        </div>

                        <div>
                            <label class="form-field" for="w3lSubect">Dinner</label class="form-field">
                            <input type="text" name="Dinner" id="w3lSubect" value="{{$info->Dinner}}"class="contact-input" />
                            <span class="text-danger">@error('Dinner'){{$message}} @enderror  </span>

                        </div>
                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-style btn-primary submit">Submit</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
</section>


@endsection