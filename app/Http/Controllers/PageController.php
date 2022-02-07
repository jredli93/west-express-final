<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ServiceGroup;
use App\ServiceType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.homepage.home');
    }

    public function contact() {
        return view('pages.contact.index');
    }
    
    public function about() {
        return view('pages.about.index');
    }

    public function services() {
        return view('pages.services.index');
    }

    public function careers() {
        return view('pages.careers.index');
    }
}
