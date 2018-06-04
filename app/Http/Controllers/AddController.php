<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 12.04.2018
 * Time: 11:30
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\HomeDec;
use App\Home;
use App\Description;
// Сделать модель поста и модель комента


//class AddController
//{
//    public function  rediska(){
//
//echo 23244;
//}
//}
//
//
//<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 12.04.2018
 * Time: 12:09
 */

//use post ;

class  AddController extends  Controller
{

    public function index(){

        echo 'Cтраница!!!';
        echo   view ('add.index');



        // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ
        echo "<br>" . " это статья номер  " ;
//                                    $tasks = Description::all();
//                                        //            dd($users);
//                                    $tasks = DB::table('descriptions')->get();
//                            //        $homes = DB::table('homes_decs')->get();
//
//                                    echo view('home.team', ['tasks' => $tasks]);
//                        //        echo  view('home.index', ['tasks' => $tasks]);
        $homes = HomeDec::find(1);
//                                    $home = HomeDec::all();
//                                    $homes = Home::find(1);
//                                    $homes = Description::find(4);
//                                    $homes = Description::all();
//                            //        $articles = $user->test;
//                                    $homes = $home->home;

//        $homes = $home->fresh(); //      РАБОТАЕТ
//        $homes = $home->all(); // РАБОТАЕТ
//        $homes = $home;
//         $homes = $home->home()->where('id',1)->first();

//                 $homes = $home->where('home_decs.id',2)->get() ;
        //        $angels = $angel->user
        //          $tests =   $test->test;\
                   $reges =$homes->descript();
//                 dd($homes->home());
        foreach ($reges as $rege) {
                     echo $rege-> id . '<br>';
//            echo $home->updated_at . '<br>';
//                     echo $homes->created_at . '<br>';
        }
//                                    foreach ($homes as $home) {
//                                        echo $home->id. '<br>';
//                                    }
    }


    public function create(){
        echo 'ну такое';
    }


    public function store(){

    }


    public function show($id){

    }

    public function edit($id){

    }


    public function update($id){

    }


    public function destroy($id){

    }
}