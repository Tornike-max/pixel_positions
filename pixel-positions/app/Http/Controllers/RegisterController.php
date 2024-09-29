<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $userAttributes['password'] = bcrypt($userAttributes['password']);

        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);


        $logoPath = '';

        if ($request->hasFile('logo')) {
            $logoPath = $request->logo->store('logos');
        }

        $user = User::create($userAttributes);

        try {
            Employer::create([
                'user_id' => $user->id,
                'name' => $employerAttributes['employer'],
                'logo' => $logoPath
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Auth::login($user);

        return redirect()->to('/')->with(['message' => 'User registered successfully']);
    }
}
