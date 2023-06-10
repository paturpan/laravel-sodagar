<!-- mrmberi tahu mau ambil base template atau layout yg mana -->
@extends('layout.main') <!-- / bisa diganti dengan . -->

<!-- isi title yg cuma sebaris-->
@section('title', 'LIST DETAIL')

<!-- isi title yg banyak baris-->
@section('container')

<div class="container">
<div class="row">
<div class="col-6">
    <h1 class="mt-3">CUSTOMER DETAIL BERDASARKAN ID : {{ $students ->RESI }}</h1> <!-- mengambil dari template engine $nama -->   
    <div class="card" style="width: 40rem;">
    <div class="card-body">
 <h5 class="card-title">NAMA : {{$students->NAMA_PELANGGAN}}</h5>
    <p class="card-text">RESI : {{$students->RESI}}</p>
    <p class="card-text">NO HP : {{$students->NO_HP}}</p>
    <p class="card-text">TANGGAL MASUK : {{$students->TANGGAL_MASUK}}</p>
    <p class="card-text">KERUSAKAN : {{$students->KERUSAKAN}}</p>
    <p class="card-text">TINDAKAN : {{$students->TINDAKAN}}</p>
    <p class="card-text">STATUS : {{$students->STATUS}}</p>
    <p class="card-text">BIAYA : {{$students->BIAYA}}</p>
    <p class="card-text">TANGGAL KELUAR : {{$students->TANGGAL_KELUAR}}</p>
    <p class="card-text">KETERANGAN : {{$students->KETERANGAN}}</p>

    <a href="/customer" class="btn btn-primary">Go Back</a>

  </div>
</div>
</div>
	</div>
</div>
@endsection