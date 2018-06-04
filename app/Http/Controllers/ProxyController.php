<?php

namespace App\Http\Controllers;
use App\Ego;
use App\Proxy;
use App\User;
use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use yii\base\Model;

class ProxyController extends Controller
{


    public function index()
    {



        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS
        $proxy = Task::All();

        return view('tasks')->with('tasks', $proxy);
        //////////////////////////////////////



//        echo view ('proxy.index');

        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS

//        $egos = Ego::orderBy('created_at', 'asc')->get();
//
//        return view('egos', [
//            'egos' => $egos
//        ]);
//        $this->$egos()->where('active', 1)->get();


//        $tasks = Task::orderBy('created_at', 'asc')->get();
//
//        return view ('tasks', [
//            'tasks' => $tasks
//        ]);
//
//
//        $tasks = Task::orderBy('created_at', 'asc')->get();
//
//        return view ('tasks', [
//            'tasks' => $tasks
//        ]);


//        $user = User::orderBy('created_at', 'asc')->get();
//
//        return view('tasks', [
//            'tasks' => $user
//        ]);


}


    public  function Egos () {
        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS
        $egos = Ego::All();

        return view('egos')->with('egos', $egos);
        ////////////////////////////

    }










}
