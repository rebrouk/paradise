<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdController extends Controller
{
    public function  index () {
        echo view("bd.index");
        echo "<br>";
         print_r("ну и хуйня у вас здесь происходит");
    }
}
