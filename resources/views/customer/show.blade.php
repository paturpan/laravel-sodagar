<!-- mrmberi tahu mau ambil base template atau layout yg mana -->
@extends('layout.main') <!-- / bisa diganti dengan . -->

<!-- isi title yg cuma sebaris-->
@section('title', 'LIST DETAIL')

<!-- isi title yg banyak baris-->
@section('container')

<div class="container">
<div class="row">
<div class="col-12">
    <h1 class="mt-3">CUSTOMER DETAIL BERDASARKAN NO RESI : {{$students->RESI}}</h1>

    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    
    <br>   
    <table class="table">
    <thead class="table-dark">
<tr>
 
    <th scope="col">Nama Pelanggan</th>
    <th scope="col">Resi</th>
    <th scope="col">NO HP</th>
    <th scope="col">Tanggal Masuk</th>
    <th scope="col">Kerusakan</th>
    <th scope="col">Tindakan</th>
    <th scope="col">Status</th>
    <th scope="col">Biaya</th>
    <th scope="col">Tanggal Keluar</th>
    <th scope="col">Keterangan</th>

</tr>
</thead>
<tbody>
    <tr>
        <td>{{ $students->NAMA_PELANGGAN}}</td> 
        <td>{{ $students->RESI}}</td>
        <td>{{ $students->NO_HP}}</td>
      <td>{{ $students->TANGGAL_MASUK}}</td>
      <td>{{ $students->KERUSAKAN}}</td>
      <td>{{ $students->TINDAKAN}}</td>
      <td>{{ $students->STATUS}}</td>
      <td>{{ $students->BIAYA}}</td>
      <td>{{ $students->TANGGAL_KELUAR}}</td>
      <td>{{ $students->KETERANGAN}}</td>

    </tr>
</tbody>
</table>  



    <a href="/customer" class="btn btn-primary">Go Back</a>

  </div>
</div>
</div>
	</div>
</div>
@endsection