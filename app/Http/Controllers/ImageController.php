<?php

namespace App\Http\Controllers;
use App\Image;
use Intervention\Image\Facades\Image as ImageInt;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {var_dump(322);
        $images = Image::all();
        $this->store(  $request);
        return view('images.index',['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $path =&gt;*/ public_path().'\public';
        $file = $request->file('file');
echo 3434;
        foreach ($file as $f) {
            $filename = str_random(200) .'.' . $f->getClientOriginalExtension() ?: 'png';
            $img = ImageInt::make($f);
            $img->resize(600,600)->save(/*$path .*/ $filename);
            Image::create(['title' => $request->title, 'img' => $filename]);
        }

        return redirect()->route('images.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
