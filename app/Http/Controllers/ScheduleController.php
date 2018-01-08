<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exercise;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('generate');
    }

    public function store()
    {
        $request = exercise::where('difficulty','=',request('difficulty'))->get();
        return view('schedule')->with('schedule', $request);
    }
}
