<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    //
    protected
        $fillable = [
            'nama_institusi',
            'nama_pimpinan',
            'province_id',
            'regencie_id',
            'district_id',
            'village_id',
            'telepon',
            'logo',
            'website',
            'email',
            'password'
        ];
}
