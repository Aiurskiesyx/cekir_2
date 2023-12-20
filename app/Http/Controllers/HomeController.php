<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\Courier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $province = $this->getProvince();
        $cities = $this->getCities(); 
        $couriers = $this->getCourier(); 
        return view('home', compact('province', 'cities', 'couriers'));
    }

    public function getCities()
    {
        return City::pluck('title', 'code');
    }

    //P12 NO.1 C
    public function getCourier()
    {
        return Courier::all();
    }

    public function getProvince()
    {
        return Province::pluck('title', 'code');
    }

    // P12 NO.5 C
    public function store(Request $request)
    {
        dd($request -> all());
    }
}