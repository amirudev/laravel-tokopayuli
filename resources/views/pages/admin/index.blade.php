@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Data Transaksi</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Transaksi</li>
      </ol>
    </div>
  </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Laporan Penjualan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Transaksi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                      <td>{{ $transaction->kode_transaksi }}</td>
                      <td>{{ $transaction->tanggal }}</td>
                      <td>
                          <a href="/product/summary/{{ $transaction->kode_transaksi }}">
                              <button class="btn btn-success">Buka Invoice</button>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection