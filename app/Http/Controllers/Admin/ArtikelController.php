<?php

namespace App\Http\Controllers\Admin;


use App\Artikel;
use App\Kategori;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::paginate(10);
        return view('back.artikel.index',['data'=>$artikel]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        return view('back.artikel.create',['data'=>$kategori]);
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
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpeg,bmp,png,jpg|max:2048',
            'kategori'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('artikel-add')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $file = $request->file('foto');
            $dir = 'uploads';
            $file->move($dir,$file->getClientOriginalName());
            Artikel::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $file->getClientOriginalName(),
                'id_kategori' => $request->kategori,
            ]);
            return redirect('/artikel');
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
        $artikel = Artikel::find($id);
        return view('back.artikel.edit',['data' => $artikel]);        
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
       
       Artikel::find($request->id)->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'foto' => $file->getClientOriginalName(),
    ]);
       return redirect('/artikel');        
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('/artikel');
    }

    public function Search(Request $request)
    {

        $key = $request->search;

        $artikel = Artikel::where('judul','like',"%".$key."%")
        ->paginate();

        return view('back.artikel.index',['data' => $artikel]);
    }
}
