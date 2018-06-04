<?php

namespace App\Http\Controllers;

use App\Ego;
use App\Test;
use Illuminate\Http\Request;

use App\Http\Requests;

class EgoController extends Controller
{


    public function index ()
    {
        echo 'vot tak to))';
//        echo 'vot tak to))';
//        echo 'vot tak to))';

//        echo view('ego.index');
//        echo view('layouts.app');
//        return view('layout.app');


//        Route::get('/ego', function () {


//          public  function create () {
        $egos = Ego::orderBy('created_at', 'asc')->get();

        return view ('egos', [
            'egos' => $egos
        ]);




        //    });
    }


    public function create ()
    {
        Route::post('/ego', function (Request $request) {
//        public function edit(Request $request)
//        {

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('/ego')
                    ->withInput()
                    ->withErrors($validator);

            }
            $egos = new Ego;
            $egos->name = $request->name;
            $egos->save();

            return redirect('/ego');

        });

    }

    public function delete ()
    {


//        Route::post('/ego', function (Request $request) {
//            $validator = Validator::make($request->all(), [
//                'name' => 'required|max:255',
//            ]);
//
//            if ($validator->fails()) {
//                return redirect('/ego')
//                    ->withInput()
//                    ->withErrors($validator);
//            }
//
//            $egos = new Ego;
//            $egos->name = $request->name;
//            $egos->save();
//
//            return redirect('/ego');
//
//        });

        //    /**
//     * Delete Task
//     */
        Route::delete('/ego/{egos}', function (Ego $egos) {
            $egos->delete();

            return redirect('/ego');
        });


        }

    public function test ()  {


        // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ EGOS
        $proxy = Test::All();

        return view('egos')->with('egos', $proxy);
//        return view('test.index')->with('tests', $proxy);
        //////////////////////////////////////

    }

}
