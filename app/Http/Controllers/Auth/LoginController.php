<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function showOptions()
    {
        if(\Auth::check()) return redirect("/home");
        return view("login");
    }

}
