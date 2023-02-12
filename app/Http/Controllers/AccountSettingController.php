<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function index()
    {
        return view('account.index');
    }
}
