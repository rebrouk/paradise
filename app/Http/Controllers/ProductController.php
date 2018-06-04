<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        echo 'Cтраница!!!';
        echo $this->create() + 45;
        echo view ('product.index');
        return view ('product.product');
    }


    public function create(){
        echo 'ну такое';
    }


    public function store(){

    }


    public function shou($id){

    }

    public function edit($id){

    }


    public function update($id){

    }


    public function destroy($id){

    }
}
