<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProbController extends Controller
{

    public function index ()
    {


        //  РАБОТА С ЦИКЛАМИ  ФОР ВАИЛ СВИЧ
        echo view ('prob.index');

        //  РАБОТА С ЦИКЛАМИ  ФОР ВАИЛ СВИЧ
        echo view ('prob.cuklu');
        // разные формы пирамидки  приветствия  подставляет введеный текс
//        echo view ('prob.formphp');

        // ГОСТЕВАЯ КНИГА С ПЕРЕХОДНОМ НА ДРУГИЕ СТРАНИЦЫ
        echo view ('prob.gbook');
    }




//    public function __construct()
//    {
//        $this->middleware('auth');
//
//        $this->middleware('log')->only('prob.index');
//
//        $this->middleware('subscribed')->except('store');
//    }
}

