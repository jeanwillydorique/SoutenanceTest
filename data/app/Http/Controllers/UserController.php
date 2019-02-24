<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{
    //
    public function updateOne(Request $request)
    {   
        
    }
    public function deleteOne(Request $request)
    {
        
    }

    public function createOne(Request $request)
    {


        if ($request->role) {
            $role = 1;
        } else {
            $role = 2;
        }


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->mail;
        $user->password = bcrypt($request->password);
        $user->role_id = $role;
        $user->job_id = $request->job;
        $user->save();
        // $insertedId = $user->id;
        // dd($insertedId);
        return redirect('/home');
        
    }
}
