<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Meeting;
use App\Topic;
Use Carbon\Carbon;

class PagesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function home() {
        return view('welcome');
    }

    public function dashboard() {


        $upcoming_meetings = Meeting::where('start', '>', Carbon::now())->orderBy('start')->take(4)->get();
        $previous_meetings = Meeting::where('start','<', Carbon::now())->orderBy('start')->take(5)->get();
        //$meetings = Meeting::find(704)->topics;
        // return $meeting = Meeting::find(704)->topics()->first();


        return view('dashboard', [
            'alert_count' => '69',
            'upcoming_meetings' => $upcoming_meetings,
            'previous_meetings' => $previous_meetings]);
    }

}
