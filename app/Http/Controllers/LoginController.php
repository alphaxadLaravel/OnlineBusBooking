<?php

namespace App\Http\Controllers;

use App\Models\SubAdmin;
use Illuminate\Http\Request;
use App\Models\User;
use Mockery\Matcher\Subset;

class LoginController extends Controller
{
    //login logic here
    public function loginUsers()
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // checking if user exist in database
        $check = User::where('email', request('email'))->first();


        // checking and redirect users to their dashboard

        if (!$check) {

            session()->flash('none', '');
            return redirect('/');
        }
        if ($check->password != request('password')) {

            session()->flash('none', '');
            return redirect('/');
        } elseif ($check->role == "admin" || $check->role == "SubAdmin") {

            if ($check->role == "SubAdmin") {
                $check_subamin = SubAdmin::where('user_id', $check->id)->first();
                request()->session()->put('subadmin', $check_subamin);
            }

            request()->session()->put('user', $check);
            return redirect('/admin_dashboard');
        }
    }
}
