<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;


class BeritaController extends Controller
{
    //

    public function tabel()
    {
        $tabel['tabelberita']  = Berita::all();
        return view('/SidebarAdmin/tabel-berita')->with($tabel);
    }
    public function input()
    {
        return view('/SidebarAdmin/input-berita');
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required', 'max:50'],
            'gambar' => ['required', 'image', 'mimes:jpg,png,jpeg,gif', 'max:10000'],
            'isi' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('img-berita');
        }


        Berita::create($validatedData);
        return redirect('/admin/tabel-berita')->with('sucsess', 'Berita berhasil diupload!');
    }
    public function hapus($id)
    {
        Berita::where('id', '=', $id)->delete();
        return back()->with('sucsess', 'data berhasil dihapus!');
    }
    public function edit($id)
    {
        $row = Berita::find($id);
        $data = [
            'judul' => $row->judul,
            'gambar' => $row->gambar,
            'isi' => $row->isi,
            'id' => $row->id
        ];
        return view('/SidebarAdmin/edit-berita', $data);
    }
    public function update($id, Request $request)
    {
        $data = [
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'isi' => $request->isi,
        ];
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('img-berita');
        }
        Berita::where('id', $id)->update($data);
        return redirect('/admin/tabel-berita');
    }
}
