<?php

namespace App\Http\Controllers\Admin;


use App\Event;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $event = Event::paginate(10);
        return view('back.event.index',['data'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::get();
        return view('back.event.create',['data'=>$event]);
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
            'foto' => 'required|mimes:jpeg,bmp,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('event-add')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $file = $request->file('foto');
            $dir = 'uploads';
            $file->move($dir,$file->getClientOriginalName());
            Event::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $file->getClientOriginalName(),
            ]);
            return redirect('/event');
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
        $event = Event::find($id);
        return view('back.event.edit',['data' => $event]);
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
        $event = Event::find($request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
        ]);
        return redirect('/event'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/event');
    }

    public function Search(Request $request)
    {

        $key = $request->search;

        $event = Event::where('judul','like',"%".$key."%")
        ->paginate();

        return view('back.event.index',['data' => $event]);
    }
}
