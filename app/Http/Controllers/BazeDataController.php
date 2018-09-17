<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;

class BazeDataController extends Controller
{

    public function index()
    {

//        echo  2;
        $products = User::all();
        echo view('add.index', [

            'products' => $products

        ]);

        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8]);
        echo $collection . "<br>" . sleep(2);
        $collection = collect(['taylor', 'abigail', '12121', null])->map(function ($name) {
            return strtoupper($name);
        })
            ->reject(function ($name) {
                return empty($name);
            });

        echo $collection;
        //////////////////////////////
        //  ДОАВЛЯЕТ  В ТАБЛИЦ СТОЛБИК С ЛЮБЫМ ЗАПИСАНЫМ ЗНАЧЕНИЕМ
//        DB::table('users')->insert(
//            ['email' => 'JJjohn@example1.com', 'id' => 30 , 'name' => 'jonii', 'password' => 111111 ]
//        );
        // УВЕЛИЧИВАЕТ ПОЛНОСТЬЮ ВСЕ ИД ТАБЛИЦЫ НА УКАЗАННОЕ КОЛИЧЕСТВО  К ПРИМ НА 2
//        DB::table('users')->increment('id', 2);

        ///////////////////////////////
        // ПОДСТАВИТЬ  СЮДА ДАТУ ПРОВЕДЕНИЯ ИГР КОТОРАЯ БУДЕТ СРАВИНИВАТЬ С РЕАЛЬНОЙ ДАТОЙ И ЕСЛИ БОЛЬШЕ ТО НЕ БУДЕТ ПОКАЗЫВАТЬ
        $users = User::find()
            ->whereDate('created_at', '<', '2017-12-31')
            ->get();

        foreach ($users as $user) {

//            echo  $collection . "<br>"   . sleep (2) ;
            print_r($user->id . "<br>");
        }
////////////////////////
        // ГДЕ МЕНШЬ 5 И ГДЕ В ИЗЕРЕ ЕСТЬ ИМЯ ВАСЯ ВЫВОДИТ НА ЭКРАН ДАЖЕ ЕЛСЛИ ОН НЕ ПОПАДАЕТ ПОД ПЕРРВОЕ УСЛОВИЕ
        // ВСЕ ИД ГДЕ ЕСТЬ ИМЯ VASYA
        $users = User::find()
            ->where('id', '><', 6)
            ->orWhere('name', '=', 'Vasya')
            ->orWhere('name', '=', 'qqqqq')
            ->get();
        foreach ($users as $user) {

            print_r($user->name . "<br>");
        }
        /////////////////////////////
        auth::check();
        // ПОКАЗЫВАЕТ ВСЕ ЕМАИЛЫ КОТОРЫЕ ЕСТЬ В РОЛК_ЮЗЕР И ТОЛЬКО ИХ
        $users = User::find()
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->get();
        foreach ($users as $user) {

            print_r($user->email . "<br>");
        }

        print_r("<br>");
        // ПОКАЗЫВАЕТ ВСЕ ЕМАИЛЫ КОТОРЫЕ ЕСТЬ В ЮЗЕРЕ  ПОЛНОСТЬЮ ВСЕ НО НАЧНАЕТ С ТЕХ КОТОРЫЕ В РОЛЕ_ЮЗЕРЕ
        $users = User::find()
            ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->get();
        foreach ($users as $user) {

            print_r($user->name);
        }
/////////////////////////////
//        $query = DB::table('roles')->select('name');
//        $users = $query->addSelect('id')->get();
////        $user = User::find(2);
//        foreach ($users as $user){
//
//            print_r( $user->id);
//        }
//        $users = User::all()->max('id');
//        $users = User::all()->count();

//        $price = DB::table('orders')
//        $posts = Post::all();
//        dd($user->roles());
//        echo $users;
//        dd($users);
//        foreach ( $users as $role) {
//            echo $role . '<br />' ;
//        }

    }
}
