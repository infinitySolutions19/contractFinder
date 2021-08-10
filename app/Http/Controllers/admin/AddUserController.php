<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    //
    public function index()
    {
        return view('admin.adduser');
    }

    public function addUser(Request $req)
    {

        $req->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'max:255'],
            'email' => ['required','email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);


        $addUser = new User;
        $addUser->first_name = $req->first_name;
        $addUser->last_name = $req->last_name;
        $addUser->company = $req->company;
        $addUser->phone_number = $req->phone_number;
        $addUser->email = $req->email;
        $addUser->password = Hash::make($req->password);
        $addUser->save();
        //$req->session()->flash('status','User Entered Successfully');
        return redirect('admin/user')->with('message','New User Added Successfully');

    }

    public function userEdit($id)
    {
        $editUser = User::find($id);
        return view('admin.editUser',['editUser'=>$editUser]);

    }
}
