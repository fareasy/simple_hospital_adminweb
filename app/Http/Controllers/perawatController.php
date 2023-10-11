<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perawat;

class perawatController extends Controller
{
    //
    public function index()
    {
        $perawat=perawat::class;
        return view('perawat',
    [
        'perawat'=>$perawat
    ]);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'ID' => 'required|max:15',
            'Nama_Perawat' => 'required|string|max:100',
            'Tanggal_Lahir' => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat' => 'required|string|max:250',
            'No_HP' => 'required',
            'Bidang_Spesialisasi' => 'required',
        ]);

        // Save the form data to the database
        $model = perawat::create($request->all());
        if (!$model) {
            \Log::info('Request data', ['attributes' => $request->all()]);
            \Log::error('Failed to save dokter', ['attributes' => $request->all()]);
        }
        return redirect('/perawat');
    }
}
