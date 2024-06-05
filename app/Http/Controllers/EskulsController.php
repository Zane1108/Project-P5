<?php

namespace App\Http\Controllers;

use App\Models\Eskuls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EskulsController extends Controller
{

    public function index()
    {
        $eskuls = Eskuls::latest()->paginate(5);
        return view('eskuls.index', compact('eskuls'));
    }

    public function create()
    {
        return view('eskuls.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'eskul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $eskuls = new Eskuls();
        $eskuls->eskul = $request->eskul;
        $eskuls->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/eskuls', $image->hashName());
        $eskuls->image = $image->hashName();
        $eskuls->save();
        return redirect()->route('eskuls.index');
    }

    public function show($id)
    {
        $eskuls = Eskuls::findOrFail($id);
        return view('eskuls.show', compact('eskuls'));
    }

    public function edit($id)
    {
        $eskuls = Eskuls::findOrFail($id);
        return view('eskuls.edit', compact('eskuls'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'eskul' => 'required',
            'deskripsi' => 'required',
        ]);

        $eskuls = Eskuls::findOrFail($id);
        $eskuls->eskul = $request->eskul;
        $eskuls->deskripsi = $request->deskripsi;

        //<input type="number" name="deskripsiBarang">
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/eskuls', $image->hashName());
        //delete old image
        Storage::delete('public/eskuls/' . $eskuls->image);

        $eskuls->image = $image->hashName();
        $eskuls->save();
        return redirect()->route('eskuls.index');

    }

    public function destroy($id)
    {
        $eskuls = Eskuls::findOrFail($id);
        Storage::delete('public/eskuls/' . $eskuls->image);
        $eskuls->delete();
        return redirect()->route('eskuls.index');

    }
}
