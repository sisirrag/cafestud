@extends("theme")
@section("content")
<div class="inner-banner"></div>
<form action="/fpass" method="post">
@csrf
<div class="container">

<div class="row mt-4">
<div class="col"></div>
<div class="col mt-4">

<div class="row mt-4"><h3 style="color:grey">Forgot Password ?</h3></div>
            @if(Session::get('success'))
            <div class="alert alert-success mt-4">
            {{Session::get('success')}}
            </div>
            @endif
<div class="row mt-4 "><label class="form-field" for="email">Enter your registered email:</label class="form-field" >
                            <input type="email" name="email" class="form-control mt-4" placeholder="someone@example.com" value="{{old('email')}}" required>
                            <span class="text-danger">@error('email'){{$message}} @enderror  </span></div>
<div class="text-right mt-4"><button class="btn btn-style btn-primary submit">Submit</button></div> 
<div class="row mt-4">

</div>   

</div>
<div class="col"></div>
</div>
</div>
</form>
@endsection