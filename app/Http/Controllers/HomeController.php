<?php

namespace App\Http\Controllers;

use App\Models\TbRebook;
use App\Models\TbRoom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ruangan = TbRoom::all();
        return view('welcome', compact('ruangan'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function booking(Request $request)
    {
        $request->validate([
            'id_room' => 'required',
        ]);

        // $bookingExist = TbRebook::where('id_room', $request->id_room)
        // ->where(function ($query) use ($request) {
        //     $query->where('waktu_mulai', '<=', $request->waktu_mulai)
        //         ->where('waktu_berakhir', '>=', $request->waktu_mulai);
        // })
        // ->orWhere(function ($query) use ($request) {
        //     $query->where('waktu_mulai', '<=', $request->waktu_berakhir)
        //         ->where('waktu_berakhir', '>=', $request->waktu_berakhir);
        // })
        // ->first();

        // if ($bookingExist) {
        //     return back()->with('error', 'Waktu tersebut telah terisi.');
        // }

        // dd($request->all());

        // $checkExist = TbRebook::where('id_room', $request->id_room)
        //     ->where(function ($query) use ($request) {
        //         $query->whereBetween('waktu_mulai', [$request->waktu_mulai, $request->waktu_berakhir])
        //             ->orWhereBetween('waktu_berakhir', [$request->waktu_mulai, $request->waktu_berakhir]);
        //     })->first();

        // if ($checkExist) {
        //     return back()->with('error', 'Maaf, Ruangan telah dipesan pada tanggal dan waktu yang sama. Silahkan coba yang lain.');
        // }

        $data = new TbRebook();
        $data->id_room = $request->input('id_room');
        $data->nama_rebook = $request->input('nama_rebook');
        $data->no_hp_rebook = $request->input('no_hp_rebook');
        $data->waktu_mulai = $request->input('waktu_mulai');
        $data->waktu_berakhir = $request->input('waktu_berakhir');

        $cekRuangan = TbRebook::where('id_room', $request->id_room)
        ->where(function ($query) use ($data) {
            $query->where('waktu_mulai', '<=', $data->waktu_mulai)
                    ->where('waktu_berakhir', '>=', $data->waktu_mulai);
        })
        ->orWhere(function ($query) use ($data) {
            $query->where('waktu_mulai', '<=', $data->waktu_berakhir)
                    ->where('waktu_berakhir', '>=', $data->waktu_berakhir);
        })
        ->first();

        if ($cekRuangan)
        {
            return back()->with('error', 'Maaf, Ruangan telah dipesan pada tanggal dan waktu yang sama. Silahkan coba yang lain.');
        }

        $data->save();

        return back()->with('message', 'Berhasil Book Ruangan. Thank you!.');
    }
}
