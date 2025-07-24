<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\support\Facades\Hash;


//     $request->validate([
//         'username' => 'required|string|unique:users',
//         'password' => 'required|string|min:6',
//     ]);

//     User::create([
//         'username' => $request->username,
//         'password' => bcrypt($request->password), // Hash the password
//     ]);

//     return redirect('/login_page')->with('success', 'User created successfully!');
// }

class AuthController extends Controller
{
    public function showMainPage()
    {
        return view('main_page');
    }
    public function showLoginPage()
    {
        return view('login');
    }

    public function showContactPage()
    {
        return view('contact');
    }

    public function showFeaturesPage()
    {
        return view('features');
    }

    // public function show_img()
    // {
    //     return view('show_img');
    // }

    public function login(Request $request)
    {
        // Find the user by name
        $user = User::where('name', $request->name)->first();

        // Check if the user exists
        if (!$user) {
            return redirect('/login_page')->with('Failed', 'Name is incorrect');
        }

        // Verify the password
        if (!Hash::check($request->password, $user->password)) {
            return redirect('/login_page')->with('Failed', 'Password is incorrect');
        }

        // Successful login
        return redirect('/main_page')->with('success', 'Login is successful!');
    }




    public function showRegister()
    {
        return view('register'); // Ensure this matches the filename
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // Ensure you have a password confirmation field in the form
            'phone_number' => 'required|integer|unique:users,phone_number', // Ensure phone number is unique
        ]);

        // Create the new user with hashed password
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone_number' => $validatedData['phone_number'],
        ]);

        // Redirect the user with a success message
        return redirect('/login_page')->with('success', 'User added successfully!');
    }
}
