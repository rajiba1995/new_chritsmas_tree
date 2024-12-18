<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
   // Show the admin login page
   public function showLoginForm()
   {
       return view('auth.admin-login');
   }

   // Handle admin login
   public function login(Request $request)
   {
       // Validate the incoming request
       $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6',
       ]);

        try {
            // Attempt to log the admin in using the admin guard
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                // Redirect to admin dashboard if successful
                return redirect()->intended(route('admin.dashboard'));
            }

            // Redirect back if login fails
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        } catch (\Exception $e) {
            // Log the error for debugging
            // Log::error('Login error: ' . $e->getMessage());
            // dd($e->getMessage());
            // Handle the error and notify the user
            return back()->withErrors(['email' => 'An error occurred while trying to login. Please try again later.']);
        }
   }

   // Logout the admin user
   public function logout()
   {
       Auth::guard('admin')->logout();

       return redirect()->route('admin.login');
   }

}
