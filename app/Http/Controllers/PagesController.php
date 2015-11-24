<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('dashboard', ['username' => 'Travis Britz',
            'alert_count' => '69']);
    }

}
