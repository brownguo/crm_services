<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskHome(Request $request)
    {
        dd($request->all());
        //return view('test.test', ['id' => $id,'task' => Task::all()]);
    }
}
