<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KelolaFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Film::all();
        return view('kelola_film.index', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'judul_film' => 'required',
        //     'genre' => 'required',
        //     'status' => 'required',
        //     'gambar' => 'required',
        // ]);

        $rules = [
            'judul_film' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'gambar' => 'required',
        ];

        $text = [
            'judul_film.required' => 'Kolom Judul Film Tidak Boleh Kosong',
            'genre.required' => 'Kolom Genre Tidak Boleh Kosong',
            'status.required' => 'Kolom Status Tidak Boleh Kosong',
            'gambar.required' => 'Kolom Gambar Tidak Boleh Kosong',
        ];

        $validasi = Validator::make($request->all(), $rules, $text);


        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput()->with('gagal', 'Film Gagal Disimpan, Ada Kesalahan Inputan !!!');
        }


        $store = Film::create($request->all());

        $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
        $store->gambar = $request->file('gambar')->getClientOriginalName();
        $store->save();

        return redirect()->back()->with('sukses', 'Film Berhasil Disimpan !!!');
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'judul_film' => 'required',
        //     'genre' => 'required',
        //     'status' => 'required',
        // ]);

        $rules = [
            'judul_film' => 'required',
            'genre' => 'required',
            'status' => 'required',
        ];

        $text = [
            'judul_film.required' => 'Kolom Judul Film Tidak Boleh Kosong',
            'genre.required' => 'Kolom Genre Tidak Boleh Kosong',
            'status.required' => 'Kolom Status Tidak Boleh Kosong',
        ];

        $validasi = Validator::make($request->all(), $rules, $text);


        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput()->with('gagal', 'Film Gagal Disimpan, Ada Kesalahan Inputan !!!');
        }
        $data = Film::find($request->id);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                // Storage::delete($request->oldImage);
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

        return redirect()->back()->with('sukses', 'Film Berhasil Diupdate !!!');
    }

    public function destroy($id)
    {
        $data = Film::find($id);
        $file = public_path('/images/') . $data->gambar;
        @unlink($file);
        $data->delete();
        return redirect()->back()->with('sukses', 'Film Berhasil Dihapus !!!');
    }

    public function getdata($id)
    {
        $data = Film::find($id);
        return $data;
    }
}
