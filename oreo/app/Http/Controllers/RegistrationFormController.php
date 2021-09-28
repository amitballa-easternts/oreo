<?php

namespace App\Http\Controllers;

use App\Models\RegistrationForm;
use App\Models\college;
use Illuminate\Http\Request;

class RegistrationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $req)
    {
        //
        $insert=RegistrationForm::store($req);
        return redirect('register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationForm  $registrationForm
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationForm $registrationForm)
    {
        //
        $data=RegistrationForm::all();
        return view('registration_view',["members"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationForm  $registrationForm
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationForm $registrationForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationForm  $registrationForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationForm $registrationForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationForm  $registrationForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationForm $registrationForm,$req)
    {
        //
        $data=RegistrationForm::find($req);
        $data->delete();
        return redirect('list');
    }

    /* Start Student Profiile Update */
    public function updateProfile(Request $req)
    {
        $college= RegistrationForm::find($req->get_id);
        $college->college_name=$req->college;
        $college->dob=$req->dob;
        $college->save();

        return redirect('profile');
    }
}
