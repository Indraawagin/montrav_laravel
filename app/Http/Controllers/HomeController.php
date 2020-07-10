<?php

namespace App\Http\Controllers;
use App\TravelPackage;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = travelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
