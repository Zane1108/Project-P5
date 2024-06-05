<?php

namespace App\Http\Controllers;

use App\Models\Jurusans;
use Illuminate\Http\Request;

class JurusansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusans::latest()->paginate(5);
        return view('jurusans.index', compact('jurusans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusans.create');

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
            'nama_jurusan' => 'required',
        ]);

        $jurusans = new Jurusans();
        $jurusans->nama_jurusan = $request->nama_jurusan;
// upload image
        $jurusans->save();
        return redirect()->route('jurusans.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusans = Jurusans::findOrFail($id);
        return view('jurusans.show', compact('jurusans'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusans = Jurusans::findOrFail($id);
        return view('jurusans.edit', compact('jurusans'));

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
            'nama_jurusan' => 'required',
        ]);

        $jurusans = Jurusans::findOrFail($id);
        $jurusans->nama_jurusan = $request->nama_jurusan;
        $jurusans->save();
        return redirect()->route('jurusans.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusans =Jurusans::findOrFail($id);
        $jurusans->delete();
        return redirect()->route('jurusans.index');

    }
}
