<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginmodel;
use App\Models\feemodel;
use App\Models\menumodel;
use Validator;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Mail\ForgotPass;
use Illuminate\Support\Facades\Mail;

class ucontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data=['loggeduserinfo'=>loginmodel::where('email','=',session('loggeduser'))->first()];
        return view('shome',$data);
    }
    public function forgot()
    {
        
        return view('forgot');
    }
    public function fpass(Request $request)
    {
        $getemail=request('email');
        $row=DB::table('loginmodels')->where('email',$getemail)->first();

        if($row)
        {
            $stud=array(
            
                'name'=> $row->name,
                'email'=> $row->email,
                'pass'=>$row->pass
                
            );
            Mail::to($stud['email'])->send(new ForgotPass($stud));
            return back()->with('success','Password will be sent to your email.');

        }
        else
        {
            return back();

        }
        //return view('forgot');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $data=['loggeduserinfo'=>loginmodel::where('email','=',session('loggeduser'))->first()];
        $bf=DB::table('menumodels')->select('Day','Breakfast')->get();
        $lu=DB::table('menumodels')->select('Day','Lunch')->get();
        $dn=DB::table('menumodels')->select('Day','Dinner')->get();
        return view('smenu',$data,compact('bf','lu','dn'));
        
    }

    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/');
        }
        
    }
    public function profile()
    {
        //$data = DB::table('feemodels')->where('sid',session('loggedusersid'))->get();
        $data=['loggeduserinfo'=>loginmodel::where('email','=',session('loggeduser'))->first()];

        return view('sprofile',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'sid' => 'required|unique:App\Models\loginmodel,sid|regex:/^IS[0-9]{3}$/i',
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\loginmodel,email',
            'mob' => 'required|digits:10|unique:App\Models\loginmodel,mob',
            'pass' => 'required|min:5',
            'repass' => 'required|same:pass'
        ]);

        $getsid=request('sid');
        $getname=request('name');
        $getemail=request('email');
        $getmob=request('mob');
        $getpass=request('pass');
        $getrepass=request('repass');
            

        $user=new loginmodel();
        $user->sid=$getsid;
        $user->name=$getname;       
        $user->email= $getemail;
        $user->mob=$getmob;
        $user->pass=$getpass;
        $user->repass=$getrepass;

        $user->save();

        return redirect('/');
        

    }

    public function fee()
    {
        $data=['loggeduserinfo'=>loginmodel::where('email','=',session('loggeduser'))->first()];
        $list = DB::table('feemodels')->where('sid',session('loggedusersid'))->get();
        $listp = DB::table('feemodels')->where([['sid',session('loggedusersid')],['status','Paid']])->get();
        $listu = DB::table('feemodels')->where([['sid',session('loggedusersid')],['status','Unpaid']])->get();
        
        return view('sfee',compact('list','listp','listu'),$data);

    }

   
    public function logs(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'pass' => 'required',
            
        ]);

        
            $userinfo=loginmodel::where('email','=',$request->email)->first();
            $userinfo2 = loginmodel::where([['email',$request->email],['pass',$request->pass]])->first();
           
            if($request->email=='admin@cafe.com' && $request->pass=='cafeadmin')
            {
                $request-> session()->put('loggeduser','admin');                
                return redirect('/ahome');
                
            }
            else if($userinfo2)
            {
                $request->session()->put('loggeduser',$userinfo->email);
                        $request->session()->put('loggedusersid',$userinfo->sid);
                        return redirect('/home');
            }
            else{
                return back()->with('fail','Invalid Credentials !');
            }

      

    }
    public function passupdate(Request $request)
    {
        $request->validate([
            'pass'=>'required',            
            'cpass'=>'required|same:pass'
        ]);

        $updating=DB::table('loginmodels')->where('email',session('loggeduser'))->update([
            'pass'=>$request->input('pass')          
        ]);

        return redirect('profile');

        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
