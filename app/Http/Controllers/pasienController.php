<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

class pasienController extends Controller
{
    //
    public function index()
    {
        $pasien=pasien::class;
        return view('pasien',
    [
        'pasien'=>$pasien
    ]);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'ID' => 'required|max:15',
            'Nama' => 'required|string|max:100',
            'Tanggal_Lahir' => 'required',
            'Alamat' => 'required|string|max:250',
            'Jenis_Kelamin' => 'required',
            'Kontak_Darurat' => 'required',
        ]);

        // Save the form data to the database
        $model = pasien::create($request->all());
        if (!$model) {
            \Log::info('Request data', ['attributes' => $request->all()]);
            \Log::error('Failed to save dokter', ['attributes' => $request->all()]);
        }
        return redirect('/pasien');
    }
}
