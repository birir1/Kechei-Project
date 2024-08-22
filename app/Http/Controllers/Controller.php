<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        return view("frontend.index");
    }

    public function about(){
        return view("frontend.about");
    }

    public function reservations(){
        return view("frontend.reservations");
    }

    public function newsevents(){
        return view("frontend.newsevents");
    }

    public function contacts(){
        return view("frontend.contacts");
    }

    public function menu(){
        return view("frontend.menu");
    }

    public function gallery(){
        return view("frontend.gallery");
    }

    public function calender(){
        return view("frontend.calender");
    }

    public function accomodation(){
        return view("frontend.accomodation");
    }

    public function recreation(){
        return view("frontend.recreation");
    }

    public function hotelrestaurant(){
        return view("frontend.hotelrestaurant");
    }

    public function massagetherapy(){
        return view("frontend.massagetherapy");
    }

    public function eventsparties(){
        return view("frontend.eventsparties");
    }

    public function conferences(){
        return view("frontend.conferences");
    }

    public function careers(){
        return view("frontend.careers");
    }
}