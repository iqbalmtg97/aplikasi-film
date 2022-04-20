<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index()
    {
        $sedang_tayang = Film::where('status', 'Sedang Tayang')->get();
        $segera_hadir = Film::where('status', 'Segera Hadir')->get();
        return view('landing_page.index', compact('sedang_tayang', 'segera_hadir'));
    }

    public function sedangTayang()
    {
        $sedang_tayang = Film::where('status', 'Sedang Tayang')->get();
        return view('landing_page.sedang_tayang', compact('sedang_tayang'));
    }

    public function segeraHadir()
    {
        $segera_hadir = Film::where('status', 'Segera Hadir')->get();
        return view('landing_page.segera_hadir', compact('segera_hadir'));
    }

    public function favorit()
    {
        $favorite = Film::where('favorite', 1)->get();
        return view('landing_page.favorit', compact('favorite'));
    }

    public function tambahFavorit(Request $request)
    {
        // dd($request->all());
        $favorit = Film::find($request->id)->first();
        $favorit->favorite = 1;
        // return $favorit;
        $update = $favorit->save();
        $favorite = Film::where('favorite', 1)->get();
        return view('landing_page.favorit', compact('favorite'));
    }

    public function rating(Request $request)
    {
        // dd($request->all());
        // $stars_rated = $request->input('rating');
        // $ratings = Rating::where('film_id', $request->film_id)->get();

        $sudah_ada = Rating::where('user_id', Auth::id())->where('film_id', $request->film_id)->first();
        if ($sudah_ada) {
            $rules = [
                'rating' => 'required',
            ];

            $text = [
                'rating.required' => 'Rating Tidak Boleh Kosong',
            ];

            $validasi = Validator::make($request->all(), $rules, $text);


            if ($validasi->fails()) {
                return redirect()->back()->withErrors($validasi)->withInput()->with('gagal', 'Rating Tidak Boleh Kosong !!!');
            }

            $sudah_ada->stars_rated = $request->rating;
            $sudah_ada->update();
        } else {
            $rules = [
                'rating' => 'required',
            ];

            $text = [
                'rating.required' => 'Rating Tidak Boleh Kosong',
            ];

            $validasi = Validator::make($request->all(), $rules, $text);


            if ($validasi->fails()) {
                return redirect()->back()->withErrors($validasi)->withInput()->with('gagal', 'Rating Tidak Boleh Kosong !!!');
            }

            $input = Rating::create([
                'user_id' => Auth::id(),
                'film_id' => $request->film_id,
                'stars_rated' => $request->rating
            ]);
        }

        return redirect()->back()->with('sukses', 'Terima Kasih Atas Penilaian Anda');
    }

    public function getdata($id)
    {
        $data = Film::find($id);
        return $data;
    }
}
