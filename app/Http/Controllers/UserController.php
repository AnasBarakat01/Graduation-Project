<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Http\Controllers\Validator;

class UserController extends Controller
{
    public function signup(Request $req)
    {

        $flag=0;  // (1) Unique email
        foreach( User::all() as $record)
        {
            if($req->email == $record->email)
                $flag=1;
        }

        if($flag==0)
        {
        if($req->password == $req->password_confirmation)  // (2) password confirmation
        {
            $obj=User::create(['firstName'=>$req->fname , 'lastName'=>$req->lname,
                    'password'=>$req->password 
                    , 'email'=> $req->email]);
            session(['loggedIn'=>true, 'uid'=>$obj->id]);
            return redirect('/#services');
        }
        else
        {
            session(['loggedIn'=>false]);
            return redirect('/viewSL')->with(['message'=> "Passwords does not match"])->withInput();
        }
        }
        else
        {
            session(['loggedIn'=>false]);
            return redirect('/viewSL')->with(['message'=> "This email already exists"])->withInput();
        }



    }

    public function login(Request $req)
    {
        foreach( User::all() as $record)
        {
            if($req->email == $record->email)
                if($req->password == $record->password)
                {
                    session(['loggedIn'=>true, 'uid'=>$record->id]);
                    return redirect('/#services');
                }
        }
        session(['loggedIn'=>false]);
        return redirect('/viewSL')->with(['message'=> "Invalid login"])->withInput();
    }


}
