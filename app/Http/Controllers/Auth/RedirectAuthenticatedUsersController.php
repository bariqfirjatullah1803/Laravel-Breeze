<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (Auth::user()->role == 'admin') {
            return redirect('/adminDashboard');
        } elseif (Auth::user()->role == 'user') {
            return redirect('/userDashboard');
        } else {
            return auth()->logout();
        }
    }
}
