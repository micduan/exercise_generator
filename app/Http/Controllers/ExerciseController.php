<?php

namespace App\Http\Controllers;
use App\exercise;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function add()
    {
        return view('add');
    }

    public function store()
    {
        $this->validate(request(), [
            'difficulty' => 'required',
            'name' => 'required|unique:exercises'

        ]);

        $exercise = new exercise;
        $exercise->name = request('name');
        $exercise->difficulty = request('difficulty');
        $exercise->save();
        return view('add');
    }

    public function track()
    {
        return view('track');
    }


}
