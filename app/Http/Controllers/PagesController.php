<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        $data = [];
        $first_name ="teruyoshi";
        $last_name = "takemoto";
        return view('pages.about', compact('first_name','last_name'));
    }
    public function contact() {
        return view('contact');
    }
}
