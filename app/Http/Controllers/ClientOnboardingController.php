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
            'phone_number' => 'max:255',

            'date' => 'required|date|date_format:Y-m-d|after_or_equal:' . $today,
            'hour' => 'required|numeric|integer|between:8,16|max:255',
            'physician_id' => 'required|numeric|integer|max:255|exists:physicians,id',
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

        $date_time = Carbon::createFromFormat('Y-m-d H:i:s', $request->date . ' 00:00:00');
        $start_date_time = $date_time->setHour($request->hour);

        Meeting::create([
            'user_id' => $user->id,
            'physician_id' => $request->physician_id,
            'type' => 'interview',
            'start_date_time' => $start_date_time,
            'duration' => 60,
        ]);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/dashboard');
    }
}
