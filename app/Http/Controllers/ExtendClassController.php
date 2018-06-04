<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendClassController extends Controller
//ЧТО БЫ НАСЛЕДОВАТЬ  КОНСТРУКТОР  ClassController А  НУЖНО НАСЛЕДОВАТЬ  ЭТОТ КЛАСС extends ClassController
{

    function index()
    {


        echo view ('extend.index');

    }


//            function __construct() {
//
//            parent::__construct();
//            print "Конструктор класса ExtendClassController\n";
//        }
}

// Конструктор класса BaseClass
// $obj1 = new ClassController();

