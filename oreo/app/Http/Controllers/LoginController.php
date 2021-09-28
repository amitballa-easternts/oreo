<?php

namespace App\Http\Controllers;
use App\Models\RegistrationForm;
use App\Models\Login;
use App\Models\college;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
Use Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login_form');
    }

    public function loginUser(Request $req)
    {
        

        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $data=RegistrationForm::where('email',$req->email )->first();
        
        if($data)
        {
            if($data->status=="Active")
            {
                if(Hash::check($req->password,$data['password']))
                {
                    $req->session()->put('loginName',$data->first_name);
                    $req->session()->put('loginEmail',$data->email);
                    $req->session()->put('loginId',$data->id);
                    return redirect('profile');
    
                }
                else{
                    
                    $req->session()->flash('logincheck','Password Not Macth !!');
                    return redirect('login');
                }
            }
            else
            {
                $req->session()->flash('logincheck','User Can Deactive !!');  
                return redirect('login');             
            }

        }
        else
        {
            $req->session()->flash('logincheck',"Email Is Not Valid !!");
            return redirect('login');
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {   
        
        if(Session::has('loginId'))
        {
            $data=RegistrationForm::where('id',Session::get('loginId'))->first();
            $college=College::all();
        }

        return view('profile',compact('data'),['members'=>$college]);
    }
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session()->flash('logincheckSuccess','Log Out Success Fully');
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
