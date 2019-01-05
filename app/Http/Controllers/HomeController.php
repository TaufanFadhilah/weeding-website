<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getClient(){
      //create a new event
      $event = new Event;

      $event->name = 'A new event';
      $event->startDateTime = Carbon::now();
      $event->endDateTime = Carbon::now()->addHour();
      $event->addAttendee(['email' => 'taufanfadhilahiskandar@gmail.com']);

      $event->save();
    }
}
