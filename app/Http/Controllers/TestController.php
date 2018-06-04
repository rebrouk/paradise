<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Test;
use App\Http\Requests;

class TestController extends Controller
{

    public function index()
    {


        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS
        $proxy = Test::All();

        return view('egos')->with('egos', $proxy);
//        return view('test.index')->with('tests', $proxy);
        //////////////////////////////////////

    }


    public function create ()
    {


        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS
        $proxy = Task::All();

        return view('tasks')->with('tasks', $proxy);
//        return view('test.index')->with('tests', $proxy);
        //////////////////////////////////////

    }


}
