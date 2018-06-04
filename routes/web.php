<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/**
 * Add New Task   ДОБАВЛЕНИЕ ЗАДАЧИ
 */
Route::post('/task', function (Request $request) {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:255',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect('/t')
//                ->withInput()
//                ->withErrors($validator);
//        }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/t');

});

/**
 * Delete Task   УДАЛЕНИЕ ЗАДАЧИ
 */
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/t');
});
use App\Task;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard   ГЛАВНАЯ СТРАНИЦА
 */
Route::get('/t', function () {
    $tasks = Task::find( 2)->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

//});
//
//
//
//Route::get('/', 'TaskController@index');
//{
//
//    Route::group(['middleware' => 'web'], function () {
//
//
//        Route::get('/', function () {
//            $tasks = Task::orderBy('created_at', 'asc')->get();
//
//            return view('tasks', [
//                'tasks' => $tasks
//            ]);
//        });
//
//
//        Route::post('/task', function (Request $request) {
//            $validator = Validator::make($request->all(), [
//                'name' => 'required|max:255',
//            ]);
//
//            if ($validator->fails()) {
//                return redirect('/')
//                    ->withInput()
//                    ->withErrors($validator);
//            }
//
//            $task = new Task;
//            $task->name = $request->name;
//            $task->save();
//
//            return redirect('/');
//
//        });
////
////    /**
////     * Delete Task
////     */
//        Route::delete('/task/{task}', function (Task $task) {
//            $task->delete();
//
//            return redirect('/');
//        });
//
//
//    });
//}
//

//use App\Ego;
//
//Route::get('/ego', 'EgoController@index');
//
//Route::get('/proxy', 'ProxyController@index');
//
//
//Route::get('/ego', function () {
//    $egos = Ego::orderBy('created_at', 'asc')->get();
//
//    return view('tasks', [
//        'tasks' => $egos
//    ]);
//});
//
//
//
//
//Route::get('/test', 'TestController@index');
//
////Мой проект делает нечто подобное:
////
////MANY_MANY связь между магазином и картой, этот dataprovider используется для отображения списка магазинов, связанных с конкретной картой:
//
//$shopDataProvider=new CActiveDataProvider( 'Shop',
//    array(
//        'criteria'=>array(
//            'with'=>array('cardShop'),
//            'condition'=>'cardShop.card_id=:cardId',
//            'params'=>array(':cardId'=>$id),
//            'order'=>'t.id DESC',
//            'together'=>true,
//        ),
//    )
//);


//   ЭТО СПОСОБ ПОДСОЕДИНЕНИЯ С КОНТРОЛЛЕРОМ
Route::get('/user',['as'=> 'post', 'uses' => 'UserController@index']);

//  ЭТО СПОСОБ ПОДСОЕДИНЕНИЯ БЕЗ КОНТРОЛЛЕРА
Route::get('user/{id}', function ($id) {
    return 'Hello World i admin aaagaaaa '. 'User '.$id;
});

//Можно задать столько параметров маршрута, сколько требуется для вашего маршрута
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Hello World i admin xoxoxox '. 'User';
});

// можно задатьпараметр маршрута,этот параметр  необязательный. делается с помощью ? знака после имени параметра.
Route::get('user/{name?}', function ($name = 'John') {
    return  'hello mazafaka '.$name;
});

////  Метод where принимает имя параметра и регулярное выражение, определяющее, как параметр должен быть ограничен:
Route::get('users/{id}/{name}', function ($id, $name) {
    return $id . $name;
})->where(['id' => '[0-5]+', 'name' => '[a-z]+']);

//  После определения шаблона он автоматически применяется ко всем маршрутам, использующим имя этого параметра:
Route::get('usser/{id}', function ($id) {
    // Выполняется только если ИД является числовым...
    print_r('Выполняется только если ИД является числовым...');
});

// Для доступа к информации о маршруте, обрабатывающем входящий запроc на фасаде маршрута их использовать:
$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();

Route::get('add/index', function () {
    return view('welcome cyka');
});

Route::prefix('add')->group(function () {
    Route::get('index', function () {
       $a = "index.php";
        echo 234;
        // Переход выглядит таким образом "/admin/users" URL
    });
});
Route::get('add/index', function () {
    //
})->name('index');

Route::get('add/index', 'AddController@index')->name('profile');

//Route::get([
//    'auth'=>'Auth\AuthController',
//    'password'=>'Auth\PasswordController',
// ]);


Route::get('/p',['as'=> 'post', 'uses' => 'PostController@index']);
Route::get('/post',['as'=> 'post', 'uses' => 'PostController@index']);
Route::get('unpublished',['as'=> 'post.unpublished', 'uses' => 'PostController@unpublished']);

Route::get('post/create',          ['as' => 'post.create', 'uses' =>'PostController@create']);
Route::post('post',                ['as' => 'post.store', 'uses' =>'PostController@store']);
Route::post('post',                ['as' => 'post.store', 'uses' =>'PostController@index']);
Route::get('post/post',            ['as' => 'post.show', 'uses' =>'PostController@show']);
Route::get('post/{post}/edit',     ['as' => 'post.edit', 'uses' =>'PostController@edit']);
Route::PUT('post/{post}',          ['as' => 'post.update', 'uses' =>'PostController@update']);
Route::PATCH('post/{post}',        ['uses' =>'PostController@update']);
Route::DELETE('post/{post}',       ['as' => 'post.update', 'uses' =>'PostController@destroy']);
//$router->resours('post', 'PostController');  // По сути то же само что 8 сторчек выше


Route::get('/add',['as'=> 'post', 'uses' => 'AddController@index']);


Route::get('/product',['as'=> 'post', 'uses' => 'ProductController@index']);



Route::get('unpublished',['as'=> 'post.unpublished', 'uses' => 'PostController@unpublished']);

Route::get('/bd',['as'=> 'post', 'uses' => 'BdController@index']);


Route::get('/reg',['as'=> 'post', 'uses' => 'HomeController@index']);


Route::get('/fasad',['as'=> 'post', 'uses' => 'FasadController@index']);


use Illuminate\Support\Facades\Cache;
Route::get('/cache', function () {
    return Cache::get('key');
});

Route::get('people/profile', 'PeopleController@showProfile')->name('profile');

Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
    });
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('blade', function () {
    return view('child');
});

// переводит на главную страницу ЛАРАВЕЛ  С ДОКУМЕНТАЦИЕЙ И ВСЕМ ОСТАЛЬНЫМ
Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});

Route::get('/relation','RelationshipController@show') ;
Route::get('/index{id}','IndexController@create');
Route::get('/index','IndexController@index');

//Route::get('/relation', 'RelationshipController@index')->name('home');




Route::get('/coment',['as'=> 'post', 'uses' => 'CommentController@index']);


Route::get('/class',['as'=> 'post', 'uses' => 'ClassController@index']);


Route::get('/extend',['as'=> 'post', 'uses' => 'ExtendClassController@index']);


//  СТРАНИЦА ДЛЯ СВЯЗИ ПОЛЬЗОВАТЕЛЕЙ С АДМИНОМ  СТРАНИЦА "СВЯЗАТЬСЯ С НАМИ"
Route::get('/email', 'EmailController@index');

Route::post('/email', 'EmailController@create');



//  СТРАНИЦА ДЛЯ СОЗДАНИЯ КОМАНД  СТРАНИЦА "СОЗДАТЬ КОМАНДУ"
Route::get('/create', 'CreateTeamController@index');

Route::post('/create', 'CreateTeamController@create');


use  Illuminate\Support\Facades\Validator;
use  App\Home;


Auth::routes();


Route::get('logout', function() //  ВЫПОЛНЯЕТ ВЫХОД ЧЕРЕЗ ФОРМУ logout  ЛОГИНА И ПАРОЛЯ
{
    Auth::logout();
    return Redirect::home();
});

//   СОЗДАТЬ ОЩУЮ ТАБЛ  ГДЕ ПОКАЗЫВАЕТ КОМАНДУ И КТО В НЕЕ=Й УЧАСТВУЕТ ИЛИ ПРИДЕТ
Route::get('/teamuser', 'TeamUserController@index');
Route::post('teamuser', 'TeamUserController@getUser');

//Route::get('teamuser/show/{id}', 'TeamUserController@show'); // ВСТАВЛЯЕТ СВЕРХУ ИД USER его

use App\TeamUser;
use Illuminate\Support\Facades\DB;

Route::group(['middleware' => 'web'], function () {
///**
// * Add New Task   ДОБАВЛЕНИЕ ЗАДАЧИ
// */
    Route::post('/teamuser', function (Request $request) {


        $teamuser = new TeamUser();
         $teamuser->teams_id = $request->teams_id;
        $teamuser->user_id = $request->user_id;
        $teamuser->save();

        TeamUser::getQuery()->delete($request);

        return redirect('/teamuser');

    });
/**
//     * Delete TeamUser
//     */
        Route::delete('/teamuser', function (  ) {
             $a =\Auth::id() ;

             \App\TeamUser::where('user_id', '=', $a)
                 ->where('teams_id', '=', \Request::input('teams_id'))->delete();

            return redirect('/teamuser');
        });

});





Route::get('/', 'HomeController@index');

Route::get('team/show/{id}', 'HomeController@show');

//use App\TeamUser;
Route::post('team/show/{id}', 'HomeController@create');/*, function (Request $request) {*/



Route::delete('team/show/{id}', 'HomeController@delete' );


Route::get('/account', 'PersonalAccountController@index');


Route::get('/account/{id}', 'PersonalAccountController@account');


