<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rawat_inap;
use App\Models\pasien;
use App\Models\ruangan;

class rawatinapController extends Controller
{
    //
    public function index()
    {
        $rawatinap = rawat_inap::class;
        $pasien_id = pasien::pluck('Nama', 'ID');
        $ruangan_id = ruangan::pluck('Jenis_Ruangan','ID');
        return view('rawatinap',
    [
        'rawatinap'=>$rawatinap,
        'pasien_id'=>$pasien_id,
        'ruangan_id'=>$ruangan_id
    ]);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'ID' => 'required|max:15',
            'ID_Pasien' => 'required|max:15',
            'ID_Ruangan' => 'required|max:15',
            'Tanggal_Masuk' => 'required',
            'Tanggal_Keluar',
        ]);

        // Save the form data to the database
        $model = rawat_inap::create($request->all());
        if (!$model) {
            \Log::info('Request data', ['attributes' => $request->all()]);
            \Log::error('Failed to save dokter', ['attributes' => $request->all()]);
        }
        return redirect('/rawat_inap');
    }
}
