<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institut;
use App\Models\jenis;
use App\Models\Jeniskerjasama;
use App\Models\Jeniskerjasama as ModelsJeniskerjasama;

class KerjasamaController extends Controller
{
    //
    public function index()
    {
        return view('/SidebarInstitusi/kerjasama/daftarkerjasama');
    }
    public function riwayat()
    {
        return view('/SidebarInstitusi/kerjasama/riwayat');
    }
    public function input()
    {
        return view('/input-kerjasama');
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required'

        ]);
        jenis::create($validatedData);
        return redirect('/dashboard')->with('success', 'Berita berhasil diupload!');
    }
}
