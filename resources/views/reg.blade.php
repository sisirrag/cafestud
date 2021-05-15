@extends("theme")
@section("content")
<div class="inner-banner">
</div>
    <div class="container">
        
        
        <div class="row">
            
           
            <div class="col">
            <form action="/login" method="post">
            {{csrf_field()}}
                <table class="table table-borderless" style="color:#ffffff">
                    <br>
                    <tr>
                        <td><h3>Register</h3> </td>
                    </tr>
                    <tr>
                        <td>
                            Student ID:
                        </td>
                        <td>
                            <input type="text" name="sid" class="form-control" placeholder="Student ID" value="{{old('sid')}}" >
                            <span class="text-danger">@error('sid'){{$message}} @enderror  </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                            <span class="text-danger">@error('name'){{$message}} @enderror  </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email ID:
                        </td>
                        <td>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            <span class="text-danger">@error('email'){{$message}} @enderror  </span>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mobile:
                        </td>
                        <td>
                            <input type="text" name="mob" class="form-control" placeholder="Mobile" value="{{old('mob')}}">
                            <span class="text-danger">@error('mob'){{$message}} @enderror  </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="pass" class="form-control" placeholder="Password" value="{{old('pass')}}">  
                            <span class="text-danger">@error('pass'){{$message}} @enderror  </span>                  

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Re-Password:
                        </td>
                        <td>
                            <input type="password" name="repass" class="form-control" placeholder="Re-Password" value="{{old('repass')}}">                    
                            <span class="text-danger">@error('repass'){{$message}} @enderror  </span>                  

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            
                            <button class="btn btn-outline-light">Sign Up</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="col">
                <img class="img-fluid" src="Cafe Stud.png" alt="">
 
            </div>
        </div>

        
    </div>
@endsection