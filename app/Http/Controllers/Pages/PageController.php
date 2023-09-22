<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function get_about(){
        return view('pages.about');
    }

    public function get_error(){
        return view('pages.error');
    }

    public function get_booking(){
        return view('pages.booking');
    }

    public function get_contact(){
        return view('pages.contact');
    }

    public function get_services(){
        return view('pages.services');
    }

    public function get_technicians(){
        return view('pages.technicians');
    }

    public function get_testimonial(){
        return view('pages.testimonial');
    }



}
