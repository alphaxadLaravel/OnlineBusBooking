<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\SubAdmin;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    //add Company Here
    public function addCompany()
    {
        request()->validate([
            'company' => 'required|string|unique:companies,companyName',
            'fullname' => 'required|string',
            'phone' => 'required|string|unique:sub_admins|numeric|digits:10',
            'email' => 'required|string|unique:sub_admins',
        ]);

        $new_user = User::Create([
            'email' => request('email'),
            'password' => "1234",
            'role' => "SubAdmin",
        ]);

        $new_sub_admin = SubAdmin::Create([
            'user_id' => $new_user->id,
            'fullname' => request('fullname'),
            'phone' => request('phone'),
            'email' => request('email'),
        ]);

        Company::Create([
            'companyName' => request('company'),
            'sub_admin_id' => $new_sub_admin->id,
        ]);
        session()->flash('exist');
        dd("added...");
    }


    public function mail()
    {
        $name = "Alpha";
        Mail::to('alphaxadfundi@gmail.com')->send(new SendEmail($name));

        return 'Email was sent';
    }
}
