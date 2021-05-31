<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
// use App\Models\Meeting;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ClientOnboardingController extends Controller
{
    public function create()
    {
        return view('portal.clients.onboarding.confirmation');
    }

    public function store(Request $request)
    {
        // var_dump(request('physician'));
        // var_dump(request('timeslot'));
        // var_dump(request('first_name'));
        // var_dump(request('last_name'));
        // var_dump(request('email'));

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => ['required', 'confirmed', Rules\Password::min(8)],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make('testen'),
            // 'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/');
    }
}
