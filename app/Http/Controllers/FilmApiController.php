<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return response()->json(['message' => 'Success', 'data' => $film]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_film' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'gambar' => 'required',
        ]);

        $store = Film::create($request->all());

        $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
        $store->gambar = $request->file('gambar')->getClientOriginalName();
        $store->save();

        return response()->json(['message' => 'Success Store', 'data' => $store]);
    }

    public function update(Request $request, $id)
    {
        $data = Film::find($id);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                $file = public_path('/images/') . $data->gambar;
                @unlink($file);
            }
            $data->update($request->all());
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        } else {
            $data->update($request->all());
        }

        return response()->json(['message' => 'Success Updated', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Film::find($id);
        $file = public_path('/images/') . $data->gambar;
        @unlink($file);
        $data->delete();

        return response()->json(['message' => 'Success Destroy', 'data' => null]);
    }
}
