<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Meeting;
// use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class ClientOnboardingController extends Controller
{
    public function create()
    {
        return view('portal.clients.onboarding.confirmation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'phone_number' => 'required|string|max:255',
            'physician_id' => 'required|string|max:255',
            'timeslot' => 'required|string|max:255',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number
        ]);

        event(new Registered($user));

        Auth::login($user);

        // $request->timeslot;
        // $start_date_time;
        Meeting::create([
            'user_id' => $user->id,
            'physician_id' => $request->physician_id,
            'type' => 'interview',
            'last_name' => $request->last_name,
            'start_date_time' => Carbon::now()->addDays(5)->setHour('13')->setMinute('0')->setSecond('0'),
            'duration' => 60,
        ]);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/dashboard');
    }
}
