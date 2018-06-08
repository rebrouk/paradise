<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
 use App\Description;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use app\Post;
use App\Home;
use App\TeamUser;
use App\User;
use App\Team;
use App\Email;
use App\HomeDec;
//use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**<meta charset="utf-8">
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
// показывает  все  игры которые состоятся
        $tasksAll = Team::orderBy('name', 'asc')->get();

        // показывает  дату и сами ближайшие игры которые состоятся
        $tasksNear = Team::orderBy('game_date', 'asc')->where('game_date', '>=', date('Y-m-d H:i:s'))->take(5)->get();
//        $users1 = User::all();
        return view('home.index', [
            'tasksAll' => $tasksAll,
            'tasksNear' => $tasksNear,
        ]);
    }

    public function show($id , Request $request)
    {      // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ    //И ВЫВОДИТ ОПИСАНЕЕ О КОМАНДЕ
        echo "<br>" . " это статья номер  " .$id;

        $counts = Team::all();
        $teamusers  = TeamUser::all();
        $commands = TeamUser::where('teams_id', '=', $id)->get();


        return view('home.team', [
                                    'descrip' => Team::findOrFail($id),
                                    'teams' => TeamUser::where('teams_id', '=', $id)->first(),
                                    'commands' => $commands,
                                    'counts' => $counts,
                                    'teamusers' => $teamusers,
                                    ]); // descrip  МОЖНО ИСПОЛЬЗОВАТЬ ЧТО БЫ ВЫЗВАТЬ ИЗ ТАБЛИЦЫ НУЖНЫЕ ДАННЫЕ ОБРАЩАЯСЬ ЧЕРЕЗ ДОПУСТИМ  {!! $news->id !!} ИЛИ ЧЕРЕЗ fOREACH
    }

    public function team()
    {
        // ВЫЗОВ ТАБЛИЦЫ
        $teams = Description::all();

        $teams = DB::table('teams')->get();

        $home = HomeDec::find(1);

        $homes = $home->home->home;
//        $homes = $home->descript;
//        $homes = $home->angel;
//        $angels = $angel->user;
//          $tests =   $test->test;
//        dd($home);
//        foreach ($homes as $home) {
//            echo $home . '<br>';
//        }
        foreach ($homes as $home) {
            echo $home->id. '<br>';
        }
        echo view('home.team', ['teams' => $teams]);
    }



    public function create($id , Request $request)
    {
        // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ      //И ВЫВОДИТ ОПИСАНЕЕ О КОМАНДЕ
        echo "<br>" . " это статья номер  " .$id;

        $commands = TeamUser::find( $id);
//        $commands = TeamUser::find(1)->user()->where('user_id')->first();
        $commands = $commands->user;
        $counts = Team::all();
        $teamusers  = TeamUser::all();

        //  сохранение подписчиков которые добавляются в команду
        $teamuser = new TeamUser();
         $teamuser->teams_id = $request->teams_id;
        $teamuser->user_id = $request->user_id;
        $teamuser->save();
        return view('home.team', [
            'descrip' => Team::findOrFail($id),
            'teams' => TeamUser::findOrFail($id),
            'commands' => $commands,
            'counts' => $counts,
            'teamusers' => $teamusers,
        ]); // descrip  МОЖНО ИСПОЛЬЗОВАТЬ ЧТО БЫ ВЫЗВАТЬ ИЗ ТАБЛИЦЫ НУЖНЫЕ ДАННЫЕ ОБРАЩАЯСЬ ЧЕРЕЗ ДОПУСТИМ  {!! $news->id !!} ИЛИ ЧЕРЕЗ fOREACH

    }


    public function delete( Request $request , $id )
    {
        $commands = TeamUser::find( $id);
//        $commands = TeamUser::find($id)->user()->where('user_id')->first();
//        if( $commands = $commands->user) {
//            continion;
//        }

//        $commands = $commands->user;
        $teamusers  = TeamUser::all();
        //  сохранение подписчиков которые добавляются в команду
        $teamuser = new TeamUser();
        $teamuser->teams_id = $request->teams_id;
        $teamuser->user_id = $request->user_id;
        $teamuser->save();
        $a =\Auth::id();

        // удаляет с таблицы team_user ид юзера и номер команды на которую он подписался--}}
//        if (\App\TeamUser::where('user_id', '=', $a) and
//            \App\TeamUser::where('teams_id', '=', \Request::input('teams_id'))) {
////
//            \App\TeamUser::where('user_id', '=', $a) and
//            \App\TeamUser::where('teams_id', '=', \Request::input('teams_id'))->delete('user_id','teams_id');

//            \App\TeamUser::where('user_id', '==', $a)->
//            where('teams_id', '==', \Request::input('teams_id'))->delete();
//        }

        \App\TeamUser::where('user_id', '=', $a)->
                where('teams_id', '=', \Request::input('teams_id'))->delete();


        return  view('home.team', [
            'descrip' => Team::findOrFail($id),
            'teams' => TeamUser::where('teams_id', '=', $id)->get(),
            'teamusers' => $teamusers,
            'commands' => $commands,
        ]);
    }



    public function date()
    {
        // ПОКА НЕ ЗАДЕЙСТВОВАНА НИГДЕ
        echo "<br>" . " это статья номер  " ;
        $date = date('Y');
//                                    $tasks = Description::all();
//                                        //            dd($users);
//                                    $tasks = DB::table('descriptions')->get();
//                            //        $homes = DB::table('homes_decs')->get();
//
//                                    echo view('home.team', ['tasks' => $tasks]);
//                        //        echo  view('home.index', ['tasks' => $tasks]);
        $home = HomeDec::find(1);
//                                    $home = HomeDec::all();
//                                    $homes = Home::find(1);
//                                    $homes = Description::find(4);
//                                    $homes = Description::all();
//                            //        $articles = $user->test;
//                                    $homes = $home->home;

        $homes = $home->descript;
//  $homes = $home->descript()->where('id',1)->first();

//                 $homes = $homes->homedec()->where('homes.id',2)->first() ;
        //        $angels = $angel->user
        //          $tests =   $test->test;
//                 dd($homes->homedec);
        foreach ($homes->homedec as $home) {
            echo $homes->id . '<br>';
            echo $home->updated_at . '<br>';
//                     echo $homes->created_at . '<br>';
        }
//                                    foreach ($homes as $home) {
//                                        echo $home->id. '<br>';
//                                    }
//                                    return view('home.team', ['news' => HomeDec::findOrFail()]);
    }
}

