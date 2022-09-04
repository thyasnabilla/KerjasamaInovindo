<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Institusi;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\District;
use App\Models\User;
use App\Models\Village;


class ProfilController extends Controller
{
    //
    public function profil()
    {
        $data['province'] = Province::all();
        $data['regencie'] = Regencie::all();
        $data['district'] = District::all();
        $data['village'] = Village::all();
        return view('/Institusi/profil/inputprofil')->with($data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_institusi' => 'required',
            'nama_pimpinan' => 'required',
            'province_id' => 'required',
            'regencie_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'telepon' => 'required',
            'logo' => ['required', 'mimes:jpg,png,jpeg,gif', 'max:10000'],
            'website' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['logo'] = $request->file('logo')->store('image');
        $cre = auth()->user()->institusi()->create($validatedData);
        return redirect('/dashboard')->with('Succsess', 'Data sudah diisi');
    }
    public function edit($id)
    {
        $row = Institusi::find($id);
        $data = [
            'id' => $row->id,
            'nama_institusi' => $row->nama_institusi,
            'nama_pimpinan' => $row->nama_pimpinan,
            'province_id' => $row->province_id,
            'regencie_id' => $row->regencie_id,
            'district_id' => $row->district_id,
            'village_id' => $row->village_id,
            'telepon' =>  $row->telepon,
            'logo' => $row->logo,
            'website' => $row->website,
            'email' => $row->email,
            'password' => $row->village_id,
            'province' => Province::all(),
            'regencie' => Regencie::all(),
            'district' => District::all(),
            'village' => Village::all(),
        ];
        return view('/Institusi/profil/editprofil', $data);
    }
    public function update($id, Request $request)
    {
        $data = [
            'nama_institusi' => $request->nama_institusi,
            'nama_pimpinan' => $request->nama_pimpinan,
            'province_id' => $request->province_id,
            'regencie_id' => $request->regencie_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'telepon' =>  $request->telepon,
            'website' => $request->website,
            'email' => $request->email,
            'password' => $request->village_id
        ];
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('image');
        }
        Institusi::where('id', $id)->update($data);
        return redirect('/input/edit/' . $id);
    }
}
