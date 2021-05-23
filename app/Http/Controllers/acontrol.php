<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\loginmodel;
use App\Models\menumodel;
use App\Models\feemodel;
use DB;

class acontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
    
    public function feestore(Request $request)
    { 
        $this->validate($request,[
            'sid' => 'required',
            'month' => 'required',
            'fee' => 'required',
            'stat' => 'required',
            
        ]);
        
        $getsid=request('sid'); 
        $getmonth=request('month');
        $getfee=request('fee');
        $getstat=request('stat');
        
        $fee=new feemodel();
        $fee->sid=$getsid;
        $fee->month=$getmonth;
        $fee->fee=$getfee;
        $fee->status=$getstat;

        $fee->save();

        if($fee)
        {
            return redirect('/afee')->with('success','Success !');
        }
        else
        {
            return redirect('/afee');
        }





        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function menu(Request $request)
    { 
        $items=menumodel::all()->toArray();
        return view('amenu',compact('items'));             
        
    }

    public function fee()
    { 
        $stud=loginmodel::all()->toArray();
        return view('afee',compact('stud'));             
        
    }
    public function feeview()
    {

        $fee=feemodel::all()->toArray();
        return view('afeeview',compact('fee'));

    }
    

    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $students=loginmodel::all()->toArray();
        return view('astud',compact('students'));
            
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menuadd()
    {
        
        $day=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']; 
        $val="Nil";
               
        

        for($i=0;$i<7;$i++)
        {
            $menu=new menumodel();
            $menu->Day=$day[$i];
            $menu->Breakfast=$val;
            $menu->Lunch=$val;
            $menu->Dinner=$val;
            $menu->save();

        }

        
       return redirect('amenu');

    }

    function menudelete($id)
    {
        $delete=DB::table('menumodels')->where('id',$id)->delete();
        
        return redirect('amenu');
    }

    public function update(Request $request)
    {
        $request->validate([
            'Breakfast'=>'required',
            'Dinner'=>'required',
            'Lunch'=>'required'
        ]);

        $updating=DB::table('menumodels')->where('id',$request->input('id'))->update([
            'Breakfast'=>$request->input('Breakfast'),
            'Lunch'=>$request->input('Lunch'),
            'Dinner'=>$request->input('Dinner')
        ]);

        return redirect('amenu');

        
    }

    public function feeupdate(Request $request)
    {
        $request->validate([
            'sid'=>'required',            
            'fee'=>'required'
        ]);

        $updating=DB::table('feemodels')->where('id',$request->input('id'))->update([
            'sid'=>$request->input('sid'),
            'month'=>$request->input('month'),
            'fee'=>$request->input('fee'),
            'status'=>$request->input('stat')
        ]);

        return redirect('afeeview');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        $row=DB::table('menumodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('menuedit',$data);
    }

    function delete($sid)
    {
        $delete=DB::table('loginmodels')->where('sid',$sid)->delete();
        
        return redirect('ahome');
    }

    function feeedit($id)
    {
        $row=DB::table('feemodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('afeeedit',$data);
    }

    function feedelete($id)
    {
        $delete=DB::table('feemodels')->where('id',$id)->delete();
        
        return redirect('afeeview');
    }

    function orders()
    {
        $students=loginmodel::all()->toArray();
        return view('aorders',compact('students'));
    }
}
