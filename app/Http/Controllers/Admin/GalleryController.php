<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::paginate(10);
        return view('back.gallery.index',['data'=>$gallery]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $gallery = Gallery::get();
       return view('back.gallery.create',['data'=>$gallery]);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:5|max:100',
            'foto' => 'required|mimes:jpeg,bmp,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('gallery-add')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $file = $request->file('foto');
            $dir = 'uploads';
            $file->move($dir,$file->getClientOriginalName());
            Gallery::create([
                'judul' => $request->judul,
                'foto' => $file->getClientOriginalName(),
            ]);
            return redirect('/gallery');
        }
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
        $gallery = Gallery::find($id);
        return view('back.gallery.edit',['data' => $gallery]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       $file = $request->file('foto');
       $dir = 'uploads';
       $file->move($dir,$file->getClientOriginalName());
       
       $gallery = Gallery::find($request->id)->update([
        'judul' => $request->judul,
        'foto' => $file->getClientOriginalName(),
    ]);
       return redirect('/gallery');        
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect('/gallery');
    }

    public function Search(Request $request)
    {

        $key = $request->search;

        $gallery = Gallery::where('judul','like',"%".$key."%")
        ->paginate();

        return view('back.gallery.index',['data' => $gallery]);
    }
}
