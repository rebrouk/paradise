<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use App\TeamUser;
use App\Team;

use Illuminate\Http\Request;

class PersonalAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {

//         $users= User::find($id)->name;
//        $users= User::all($id);
        $images = Image::all( );
        foreach ($images as $image) {
            echo $image->img;
}
        //  сохранение подписчиков которые добавляются в команду
        $teamuser = new Image();
        $teamuser->img= $request->img;
        $teamuser->title = $request->title;
        $teamuser->save();

        echo  view('perAccount.index',[

            'images' => $images,
            'teamuser' => $teamuser,
            'descrip' => User::findOrFail($id),

        ]);
        $this->create();
        $this->account($id);
        $this->store( $request );
    }


    // Переход по имени Юзера на его личную страницу или аккаунт что бы посмотреть о нем информацию
    public function account($id)
    {
            echo 555;
        echo "<br>" . " это статья номер  " .$id;

        $counts = Team::all();
        $teamusers  = TeamUser::all();
        $commands = TeamUser::where('teams_id', '=', $id)->get();

//        $user= User::find($id)->name;
//        $user= User::all($id);
        //        echo 'Имя этого Юзера ' . $users . "<br>";
//        echo 'это изер с номером ' . $id . "<br>" ;
            echo 'это изер с номером ' . $id . "<br>" ;
        return  view('perAccount.index',[
            'commands' => $commands,
            'counts' => $counts,
//            'teamusers' => $teamusers,
            'descrip' => User::findOrFail($id),
//            'user' => $user,

        ]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 777 . "<br>" ;


        return view('perAccount.index' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 111111114;
        $page= new Image($request->except('img'));
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $destinationPath =  public_path().'/public/images/';
            $filename = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
            $page->img = $filename;
            if ($request->hasFile('img')) {
                $request->file('img')->move($destinationPath, $filename);
            }
        }
        $page->save();

        return redirect ('/account/27');


        public_path().'\upload';
        $file = $request->file('file');


        // Upload and save image.
        try {
// Upload and save image.
            foreach ($file as $f) {
                $filename = str_random(20) .'.' . $f->getClientOriginalExtension() ?: 'png';
                $img = Image::make($f);
                $img->resize(200,200)->save( $filename);
                Image::create(['title' => $request->title, 'img' => $filename]);
            }
//            $input['images'] =  Image::all($file, 'img')->getImageName();
        } catch ( Image  $e) {

            return back()->withInput()->withErrors(['image', $e->getMessage()]);
        }
        return redirect()->route('perAccount.index',[

            'file' => $file,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        echo 32424;
//
//
//        public_path().'\upload';
//        $file = $request->file('file');
//        $images = Image::all();
////        var_dump($images);die;
//
//        foreach ($file as $f) {
//            $filename = str_random(20) .'.' /*. $f->getClientOriginalExtension()*/ ?: 'png';
//            $img = Image::make($f);
//            $img->resize(600,600)->save( $filename);
//            Image::create(['title' => $request->title, 'img' => $filename]);
//        }
//        return redirect()->route('perAccount.index',[
//
//            'images' => $images,
////            'path' => $path,
//
//
//        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
