<?php

namespace App\Http\Controllers;

use App\Models\Fasilitass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitassController extends Controller
{

    public function index()
    {
        $fasilitass = Fasilitass::latest()->paginate(5);
        return view('fasilitass.index', compact('fasilitass'));
    }

    public function create()
    {
        return view('fasilitass.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_fasilitas' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $fasilitass = new Fasilitass();
        $fasilitass->nama_fasilitas = $request->nama_fasilitas;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/fasilitass', $image->hashName());
        $fasilitass->image = $image->hashName();
        $fasilitass->save();
        return redirect()->route('fasilitass.index');
    }

    public function show($id)
    {
        $fasilitass = Fasilitass::findOrFail($id);
        return view('fasilitass.show', compact('fasilitass'));
    }

    public function edit($id)
    {
        $fasilitass = Fasilitass::findOrFail($id);
        return view('fasilitass.edit', compact('fasilitass'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_fasilitas' => 'required|min:5',
        ]);

        $fasilitass = Fasilitass::findOrFail($id);
        $fasilitass->nama_fasilitas = $request->nama_fasilitas;

        //<input type="number" name="deskripsiBarang">
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/Fasilitass', $image->hashName());
        //delete old image
        Storage::delete('public/Fasilitass/' . $fasilitass->image);

        $fasilitass->image = $image->hashName();
        $fasilitass->save();
        return redirect()->route('fasilitass.index');

    }

    public function destroy($id)
    {
        $fasilitass = Fasilitass::findOrFail($id);
        Storage::delete('public/fasilitass/' . $fasilitass->image);
        $fasilitass->delete();
        return redirect()->route('fasilitass.index');

    }
}
