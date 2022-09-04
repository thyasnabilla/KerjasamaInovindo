
@extends('institusi')
@section('container')
          <div class="section-header">
            <h1>Kerjasama</h1>
          </div>

          <div class="section-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Daftar Kerjasama</h4>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                    <tr>
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Permohonan</th>
                      <th>Tanggal Selesai</th>
                      <th>Lihat</th>
                      <th>Download</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>SMK YPC Tasikmalaya</td>
                      <td class="font-weight-600">Pengajuan Prakerin</td>
                      <td>18-07-2022</td>
                      <td>                
                        <div class="card-header-action">
                             <a href="#" class="btn btn-danger">Detail <i class="fas fa-chevron-right"></i></a>
                        </div>
                      </td>
                      <td>
                        <center><a href="#" class="btn btn-primary"><i class="bi bi-download"></i></a></center>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
@endsection