
@extends('institusi')
@section('container')
          <div class="section-header">
            <h1>Daftar Kerjasama</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kerjasama</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No.
                            </th>
                            <th>Tanggal Pengajuan</th>
                            <th>Jenis Kerjasama </th>
                            <th>Status</th>
                            <th>Lihat</th>
                            <th>Download</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                        <tr>
                            <td>1</td>
                            <td>18-07-2022</td>
                            <td class="font-weight-600">Pengajuan Prakerin</td>
                            <td><div class="badge badge-success">Diterima</div></td>
                            <td>                
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-danger">Detail <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </td>
                            <td>
                                <center><a href="#" class="btn btn-primary"><i class="bi bi-download"></i></a></center>
                            </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
