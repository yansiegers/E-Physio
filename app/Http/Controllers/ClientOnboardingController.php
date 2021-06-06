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
        $today = Carbon::today();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'phone_number' => 'required|string|max:255',
            'start_date' => 'required|date|date_format:m/d/Y|after_or_equal:' . $today,
            'start_hour' => 'required|numeric|integer|max:255',
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

        // $request->start_hour;
        // $start_date_time;
        Meeting::create([
            'user_id' => $user->id,
            'physician_id' => $request->physician_id,
            'type' => 'interview',
            'last_name' => $request->last_name,
            // 'start_date_time' => Carbon::now()->addDays(5)->setHour($request->start_hour)->setMinute('0')->setSecond('0'),
            'start_date_time' => Carbon::createFromFormat('m-d-Y', $request->start_date)->setHour($request->start_hour),
            'duration' => 60,
        ]);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/dashboard');
    }
}
