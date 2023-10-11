<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;

class ruanganController extends Controller
{
    //
    public function index()
    {
        $ruangan=ruangan::class;
        return view('ruangan',
    [
        'ruangan'=>$ruangan
    ]);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'ID' => 'required|max:15',
            'Jenis_Ruangan' => 'required|string|max:50',
            'Kapasitas_Ruangan' => 'required',
            'Status' => 'required',
        ]);

        // Save the form data to the database
        $model = ruangan::create($request->all());
        if (!$model) {
            \Log::info('Request data', ['attributes' => $request->all()]);
            \Log::error('Failed to save dokter', ['attributes' => $request->all()]);
        }
        return redirect('/ruangan');
    }
}
