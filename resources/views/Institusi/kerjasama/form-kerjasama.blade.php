@extends('admin')
@section('container')
    <div class="section-header">
        <h1>Formulir Pengajuan Prakerin</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="card">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Institusi</label>
                            <input type="text" class="form-control" name="nama_institusi">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Awal Prakerin</label>
                                    <input type="date" class="form-control" name="tanggal_awal">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Akhir Prakerin</label>
                                    <input type="date" class="form-control" name="tanggal_akhir">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Peserta Prakerin</label>
                            <select class="form-control  w-50" name="jumlah">
                                <option>1 Peserta</option>
                                <option>2 Peserta</option>
                                <option>3 Peserta</option>
                                <option>4 Peserta</option>
                                <option>5 Peserta</option>
                                <option>6 Peserta</option>
                                <option>7 Peserta</option>
                                <option>8 Peserta</option>
                                <option>9 Peserta</option>
                                <option>10 Peserta</option>

                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nama Peserta:</label>
                                    <input type="text" class="form-control" name="nama_peserta">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Status:</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="siswa">Siswa</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="guru">Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>NISN/NPM/NUPTK:</label>
                                    <input type="text" class="form-control" name="nomor_induk">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nomor Handphone:</label>
                                    <input type="text" class="form-control" name="no_hp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <form>
                                    <div class="form-group">
                                        <label for="upload">Upload Surat Pengjuan Prakerin</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="dokumen">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="btn btn-primary">
                                    Simpan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
