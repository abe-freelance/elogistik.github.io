@extends('layouts.template')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <!-- FORM PENCARIAN -->
          <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
          </div>
          
          <!-- TOMBOL TAMBAH DATA -->
          <div class="pb-3">
            <a href='' class="btn btn-primary">+ Tambah Data</a>
          </div>
    
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th class="col-md-1">No</th>
                      <th class="col-md-3">Nama Barang</th>
                      <th class="col-md-1">Qty</th>
                      <th class="col-md-1">Satuan</th>
                      <th class="col-md-2">Estimasi Harga</th>
                      <th class="col-md-2">Estimasi Jumlah</th>
                      <th class="col-md-2">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Komputer</td>
                      <td>1</td>
                      <td>Unit</td>
                      <td>Rp. 4.250.000.-</td>
                      <td>Rp. 4.250.000.-</td>
                      <td>
                          <a href='' class="btn btn-warning btn-sm">Edit</a>
                          <a href='' class="btn btn-danger btn-sm">Del</a>
                      </td>
                  </tr>
              </tbody>
          </table>
         
    </div>
    <!-- AKHIR DATA -->

@endsection
