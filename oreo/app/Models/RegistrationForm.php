<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class RegistrationForm extends Model
{
    use HasFactory;

    public function scopeStore($query,$req)
    {
        $req->validate([
            'name'=>'required|min:3|max:10',
            'email'=>'required|unique:registration_forms',
            'password'=>'required',
            'cpassword'=>'required|same:password',
        ],[
            'cpassword.required'=>'The password field is required..',
            'cpassword.same'=>'The confirm password and password must match.'
            ,
        ]);

        $oreo= new RegistrationForm;
        $oreo->first_name=$req->name;
        $oreo->email=$req->email;
        $oreo->password= Hash::make($req->password);
        $oreo->save();
        $req->session()->flash('sess','Registration Successfully');
    }
}
