<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//namespace App\User;
use App\Description;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use app\Post;
use App\Home;
use App\Team;
use App\Email;
use App\HomeDec;
use app\models\User;
//use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Validator;

 use Carbon\Carbon;

class CreateTeamController extends Controller
{

        public function index()
        {

            $creates = Team::orderBy('created_at', 'asc')->get(); // created_at ПОКАЗЫВАЕТ  В ПОРЯДКЕ СОЗДАНИЯ ТАБЛИЦ

            echo view('createTeam.index', [
                'creates' => $creates
            ]);

        }

    public function create(Request $request)
    {


//         Route::post('/create', 'HomeController@create', function (Request $request) {
             $validator = Validator::make($request->all(), [
                 'name' => 'required|min:1|max:100',
                 'text' => 'required|min:10',
                 'team' => 'required|min:1|max:100',
                 'game' => 'required|min:1|max:100',
             ]);
//
             if ($validator->fails()) {
//
                 return redirect('/create')
                     ->withInput()
                     ->withErrors($validator);
             }
//         $create= $request->input( 'create' );


    $creates = new Team;
    $creates->name = $request->name;
    $creates->text = $request->text;
    $creates->team = $request->team;
    $creates->game = $request->game;
//            $task->created_at = $request->created_at;
//            $task->game_date = $request->game_date;
//            $task->updated_at = $request->updated_at;
    $creates->save();

    return redirect('/create');


//         echo 32;
//         $teams = Home::all();
//////         $creates = DB::table('homes')->get();
//////            dd($users);
////         $creates = new Home;
//////         $creates->id = $request->id;
////         $creates->name = $request->name;
//////         $creates->text = $request->text;
//////          $creates->created_at = $request->created_at;
//////          $creates->game_date = $request->game_date;
//////         $creates->updated_at = $request->updated_at;
////         $creates->save();
//////         echo redirect('/create');
//         echo view('createTeam.index', ['teams' => $teams]);  // 'creates'    ЭТО СЛОВОИСПОЛЬЗОВАТЬ ДЛЯ МАССИВА  FOREACH



//         $validator = Validator::make($request->all(), [
//             'name' => 'required|max:255',
////             'email' => 'required|max:255',
//          ]);
//
//         if ($validator->fails()) {
////            echo 'dobavil';
//             return redirect('/create')
//                 ->withInput()
//                 ->withErrors($validator);
//         }
//         $email= $request->input( 'create' );


//         $emails = new Email;
//         $emails->name = $request->name;
//         $emails->email = $request->email;
////        $emails->remember_token = $request->remember_token;
//         $emails->text = $request->text;
////        $emails->created_at = $request->created_at;
////        $emails->updated_at = $request->updated_at;
//         $emails->save();
//         echo view('createTeam.index', ['email' => $emails]);  // 'creates'    ЭТО СЛОВОИСПОЛЬЗОВАТЬ ДЛЯ МАССИВА  FOREACH

//         return redirect('/create');
}
}
