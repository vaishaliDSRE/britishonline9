<?php

namespace App\Services\User;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB,Exception,Validator;
use App\Events\LogoutEvent;
use App\Models\User;

trait AuthenticatesUsers
{
    /**     
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('users.login');
    }
}
