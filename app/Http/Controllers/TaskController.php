<?php

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
//use app\models\User;
//use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Carbon\Carbon;



use App\Task;
//use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    public function indexs ()
    {
        echo 'vot tak to))';

//        echo view('task.tasks');
//        echo view('layouts.app');
//        return view('layout.app');

//        Route::group(['middleware' => 'web'], function () {
//
//
//            Route::get('/', function () {
//                $tasks = Task::orderBy('created_at', 'asc')->get();
//
//                return view('tasks', [
//                    'tasks' => $tasks
//                ]);
//            });
//
//
//            Route::post('/task', function (Request $request) {
//                $validator = Validator::make($request->all(), [
//                    'name' => 'required|max:255',
//                ]);
//
//                if ($validator->fails()) {
//                    return redirect('/')
//                        ->withInput()
//                        ->withErrors($validator);
//                }
//
//                $task = new Task;
//                $task->name = $request->name;
//                $task->save();
//
//                return redirect('/');
//
//            });
////
////    /**
////     * Delete Task
////     */
//            Route::delete('/task/{task}', function (Task $task) {
//                $task->delete();
//
//                return redirect('/');
//            });
//
//
//        });
//
//        return ;
//
//
//    }
}



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
    public function index()
    {
// показывает  все  игры которые состоятся
        $tasksAll = Team::orderBy('name', 'asc')->get();

        // показывает  дату и сами ближайшие игры которые состоятся
        $tasksNear = Team::orderBy('game_date', 'asc')->where('game_date', '>=', date('Y-m-d H:i:s'))->take(5)->get();
//        $users1 = User::all();
        return view('home.index', [
            'tasks' => $tasksAll,
            'tasksNear' => $tasksNear,
//            'users' => $users1,
        ]);
    }

    public function show($id , Request $request)
    {      // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ \
        //И ВЫВОДИТ ОПИСАНЕЕ О КОМАНДЕ
        echo "<br>" . " это статья номер  " .$id;
        //        $commands = TeamUser::orderBy('id', 'asc')->get();

//          $command = TeamUser::findOrFail($id);
//          $commands = TeamUser::find( $id);
//        $commands = TeamUser::find(1)->user()->where('user_id')->first();
//        $commands = $commands->teams;
//        dd($commands);
//        $commands->subscription('users', 'monthly')->create();
        $counts = Team::all();

//        dd($counts);
        $teamusers  = TeamUser::all();
//        $group = $teamusers->
        $commands = TeamUser::find($id);
        $commands = $commands ->user;
//       teams $user = User::find(1);

//        $commands->newSubscription('users', 'monthly')->create($creditCardToken);

        //  сохранение подписчиков которые добавляются в команду
//        $teamuser = new TeamUser();
//        $teamuser->name = $request->name;
//        $teamuser->teams_id = $request->teams_id;
//        $teamuser->user_id = $request->user_id;
//        $teamuser->save();
        return view('home.team', [
            'descrip' => Team::findOrFail($id),
            'teams' => TeamUser::findOrFail($id),
            'commands' => $commands,
            'counts' => $counts,
            'teamusers' => $teamusers,
//                                    'teamuser' => $teamuser,
        ]); // descrip  МОЖНО ИСПОЛЬЗОВАТЬ ЧТО БЫ ВЫЗВАТЬ ИЗ ТАБЛИЦЫ НУЖНЫЕ ДАННЫЕ ОБРАЩАЯСЬ ЧЕРЕЗ ДОПУСТИМ  {!! $news->id !!} ИЛИ ЧЕРЕЗ fOREACH
//
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
//         $homes = $home->descript()->where('id',1)->first();

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
    public function team()
    {
//        echo view('home.team');
        // ВЫЗОВ ТАБЛИЦЫ
        $tasks = Description::all();
//            dd($users);

        $tasks = DB::table('descriptions')->get();
//        $homes = DB::table('homes_decs')->get();

        echo view('home.team', ['tasks' => $tasks]);
//        echo  view('home.index', ['tasks' => $tasks]);
        $home = HomeDec::find(1);
//        $home = Home::find(1);
//        $angel = Description::find(1);
//        $articles = $user->test;
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
//
//        foreach ($angels as $angel) {
//            echo $angels->name. '<br>';
//        }
//        echo view('home.time');



//        $user = Home::find(1);
//        $angel = Description::find();//ЧТО БЫ СДЕЛАТЬ ОДИН К МНОГИМ НУЖНО 2 МОДЕЛИ И ОДНА БУДЕТ ОБРАЩАТЬЯ КО ВТОРОЙ В КОТОРОЙ
        // УЖЕ БУДЕТ МНОГО ОБРАЩЕНИЙ К ДРУГИМ ТАЛИЦАМ А В 1 ТАБ ДОСТАТОЧНО ОДНОГО ОБРАЩЕНИЯ К ТОЙ ТАЛБ ПРИМЕР ЕСТЬ
        // Article который обращается к User  и там уже ко всем остальным
        ///////////////////////
//        $articles = $user->test;
//        $users = $user->angel; // ОБРАЩАЕМСЯ К АНГЕЛУ  ИЗ МОДЕЛИ USER И БЕРЕМ ВСЕ ЗНАЧЕНИЯ
//        $angels = $angel->user;  // ОБРАЩАЕМСЯ К USER  ИЗ МОДЕЛИ ANGEL И БЕРЕМ ВСЕ ЗНАЧЕНИЯ  А ДАЛЬШЕ ЧЕРЕЗ foreach выводим
////          $tests =   $test->test;
//
//        foreach ($users as $user) {
//            echo $user->name. '<br>';
//        }
//
//        foreach ($angels as $angel) {
//            echo $angels->name. '<br>';
//        }
////        echo view('home.time');
//     }
//    public function __construct()
//    {

        // перенаправляет на страницу логина для регистрации работает вместе с конструктором this->middleware('auth');
//        $this->middleware('auth');
//    }

//    public function show($alias){
//        $post = Post::where('alias', $alias)->first();
//        if($post){
//            $comments = $post->comments;
//            /*
//             * Группируем комментарии по полю parent_id. При этом данное поле становится ключами массива
//             * коллекций содержащих модели комментариев
//             */
//            $com = $comments->groupBy('parent_id');
//        } else $com = false;
//        return view('post',[
//            'post' => $post,
//            'com' => $com
//        ]);
//    }

//
//             $create = Home::orderBy('created_at', 'asc')->get();
//
//             echo view('createTeam.index', [
//                 'creates' => $create
//             ]);

    }

    public function create($id , Request $request)
    {
        // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ \
        //И ВЫВОДИТ ОПИСАНЕЕ О КОМАНДЕ
        echo "<br>" . " это статья номер  " .$id;
        //        $commands = TeamUser::orderBy('id', 'asc')->get();

//          $command = TeamUser::findOrFail($id);
        $commands = TeamUser::find( $id);
//        $commands = TeamUser::find(1)->user()->where('user_id')->first();
        $commands = $commands->user;
//        dd($commands);
//        $commands->subscription('users', 'monthly')->create();
        $counts = Team::all();

//        dd($counts);
        $teamusers  = TeamUser::all();
//        $group = $teamusers->

//        $user = User::find(1);

//        $commands->newSubscription('users', 'monthly')->create($creditCardToken);

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
//                                    'teamuser' => $teamuser,
        ]); // descrip  МОЖНО ИСПОЛЬЗОВАТЬ ЧТО БЫ ВЫЗВАТЬ ИЗ ТАБЛИЦЫ НУЖНЫЕ ДАННЫЕ ОБРАЩАЯСЬ ЧЕРЕЗ ДОПУСТИМ  {!! $news->id !!} ИЛИ ЧЕРЕЗ fOREACH
//


//         Route::post('/create', 'HomeController@create', function (Request $request) {
//             $validator = Validator::make($request->all(), [
//                 'name' => 'required|max:255',
////                 'text' => 'required|max:255',
////                 'team' => 'required|max:255',
////                 'game' => 'required|max:255',
//             ]);
////
//             if ($validator->fails()) {
////                 echo 'введи че ни ть';}// УБРАТЬ ПОТОМ
////                 else{
//                 return redirect('/create')
//                     ->withInput()
//                     ->withErrors($validator);
//             }
//         $create= $request->input( 'create' );


//         $creates = new Home;
//         $creates->name = $request->name;
//         $creates->text = $request->text;
//         $creates->team = $request->team;
//         $creates->game = $request->game;
////            $task->created_at = $request->created_at;
////            $task->game_date = $request->game_date;
////            $task->updated_at = $request->updated_at;
//         $creates->save();
//
//             return ('/create');


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
    public function delete()
    {
//        $commands = TeamUser::find($id);

        $a =\Auth::id() ;
//    $teamuser->delete();
        \App\TeamUser::where('user_id', '=', $a)
            ->where('teams_id', '=', \Request::input('teams_id'))->delete();
//        TeamUser::getQuery()->delete($id);
        return redirect('/team/show/{id}');
    }
}

//$obj1 = new HomeController();
//$nova = 'username';
//echo $nova;





