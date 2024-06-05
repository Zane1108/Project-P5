<?php

namespace App\Http\Controllers;

use App\Models\Industris;
use App\Models\Jurusans;
use Illuminate\Http\Request;

class industrisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industris = Industris::with('jurusans')->latest()->paginate(5);
        return view('industris.index', compact('industris'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industris = Jurusans::all();
        return view('industris.create', compact("industris"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_industri' => 'required|min:5',
            'alamat' => 'required',
            'tahun_kerjasama' => 'required|min:1|max:1000000',
            'id_jurusan' => 'required',
        ]);

        $industris = new Industris();
        $industris->nama_industri = $request->nama_industri;
        $industris->alamat = $request->alamat;
        $industris->tahun_kerjasama = $request->tahun_kerjasama;
        $industris->id_jurusan = $request->id_jurusan;
        $industris->save();
        return redirect()->route('industris.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $industris = Industris::findOrFail($id);
        return view('industris.show', compact('industris'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industris = Industris::findOrFail($id);
        $jurusan = Jurusans::all();
        return view('industris.edit', compact('industris', 'jurusan'));

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
        $this->validate($request, [
            'nama_industri' => 'required|min:5',
            'alamat' => 'required',
            'tahun_kerjasama' => 'required|min:1|max:1000000',
            'id_jurusan' => 'required',
        ]);

        $industris = Industris::findOrFail($id);
        $industris->nama_industri = $request->nama_industri;
        $industris->alamat = $request->alamat;
        $industris->tahun_kerjasama = $request->tahun_kerjasama;
        $industris->id_jurusan = $request->id_jurusan;
        $industris->save();
        return redirect()->route('industris.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industris = Industris::findOrFail($id);
        $industris->delete();
        return redirect()->route('industris.index');

    }
}
