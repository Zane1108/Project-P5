<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelsController extends Controller
{

    public function index()
    {
        $artikels = Artikels::latest()->paginate(5);
        return view('artikels.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikels.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'judul' => 'required|min:5',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal' => 'required|min:10',
        ]);

        $artikels = new Artikels();
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->tanggal = $request->tanggal;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());
        $artikels->image = $image->hashName();
        $artikels->save();
        return redirect()->route('artikels.index');
    }

    public function show($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('artikels.show', compact('artikels'));
    }

    public function edit($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('artikels.edit', compact('artikels'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'deskripsi' => 'required',
            'tanggal' => 'required|min:10',
        ]);

        $artikels = Artikels::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->tanggal = $request->tanggal;

        //<input type="number" name="deskripsiBarang">
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());
        //delete old image
        Storage::delete('public/artikels/' . $artikels->image);

        $artikels->image = $image->hashName();
        $artikels->save();
        return redirect()->route('artikels.index');

    }

    public function destroy($id)
    {
        $artikels = Artikels::findOrFail($id);
        Storage::delete('public/artikels/' . $artikels->image);
        $artikels->delete();
        return redirect()->route('artikels.index');

    }
}
