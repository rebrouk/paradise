<?php

namespace App\Http\Controllers;
use App\Email;
use Illuminate\Http\Request;

 //     ВАЛИДАЦИЯ ТО ЕСТЬ ПРОВЕРЯЕТ ПУСТЫЕ ЛИ СТРОКИ И НЕ ДОБАВЛЯЕТ ЗАПРОС ЕСЛИ ЧЕГО НЕ ХВАТЕТ
use  Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{

    /**     // ЧТО БЫ СОЗДАТЬ ВСЕ ЭТИ ФУНКЦИИ НАДО ПРОПИСАТЬ В КОНЦЕ php artisan make:controller  pochtaController --resource
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $email = Email::all();
////        echo $proxy;
//        echo 324242;
//
        $email = Email::orderBy('created_at', 'asc')->get();

//        echo  view('email.index')->with('email', $email);
        return view('email.index', [
            'email' => $email
        ]);

//        echo view('email.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

//        Route::post('/email',  function (Request $request) {
//Route::post('/email', function (Request $request) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|max:255',
//                'text' => 'required|min:1',
            ]);

            if ($validator->fails()) {
//            echo 'dobavil';
                return redirect('/email')
                    ->withInput()
                    ->withErrors($validator);
            }
            $email= $request->input( 'email' );


        $emails = new Email;
        $emails->name = $request->name;
        $emails->email = $request->email;
//        $emails->remember_token = $request->remember_token;
        $emails->text = $request->text;
//        $emails->created_at = $request->created_at;
//        $emails->updated_at = $request->updated_at;
        $emails->save();

        return redirect('/email');
//        });


//            $validator = Validator::make($request->all(), [
//                'name' => 'required|max:255',
//            ]);
//
//            if ($validator->fails()) {
//                return redirect('/email')
//                    ->withInput()
//                    ->withErrors($validator);
//            }

//            $email = new Email();
//            $email->name = $request->name;
////            $emails->text = $request->text;
//            $email->save();
//
//            return redirect('/email');


//Способ 1 saved
//            $email= new Email();
//            $email->name         = $request->get('name');
//            $email->email        = $request->get('email');
//            $email->text         = $request->get('text');
////            $email->cre         = $request->get('created_at');
////            $email->up         = $request->get('updated_at');
//            $email->save();


//Способ 3 saved
//            Email::create([
//                'name' => $request->get('name'),
//                'display_name' => $request->get('display_name'),
//                'description' => $request->get('description'),
//            ]);
//        }
//        echo 32424232111;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        Route::get('/email', 'EmailController@index');
//
//        Route::post('/email', 'EmailController@create');
//Route::get('/email', 'EmailController@create');


    }

}
