 @extends ('layout.master')
 @section ('content')
 
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DAFTAR PERBAIKAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">


          <a href="/plays/create" class="btn btn-primary my-3">TAMBAH DATA PERBAIKAN</a>

          @if (session('status'))
            <div class="alert alert-success">
            <i class="icon fas fa-check"></i>
              {{ session('status') }}
            </div>
          @endif

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        <table class="table">
    <thead class="table-dark">
<tr>
    <th scope="col">#</th>
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
    <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
@foreach( $plays as $play ) 
    <tr>
        <th scope="row">{{ $loop->iteration }}</th> 
        <td>{{ $play->NAMA_PELANGGAN}}</td> 
        <td>{{ $play->RESI}}</td>
        <td>{{ $play->NO_HP}}</td>
      <td>{{ $play->TANGGAL_MASUK}}</td>
      <td>{{ $play->KERUSAKAN}}</td>
      <td>{{ $play->TINDAKAN}}</td>
      <td>{{ $play->STATUS}}</td>
      <td>{{ $play->BIAYA}}</td>
      <td>{{ $play->TANGGAL_KELUAR}}</td>
      <td>{{ $play->KETERANGAN}}</td>
      <td>
      <a href="/plays/{{ $play->id }}/edit" class="badge badge-dark btn-sm">edit</a>
      <a href="/plays/{{ $play->id }}/delete" class="badge badge-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">delete</a>
    </td>
    </tr>
@endforeach
</tbody>
</table>  
{{ $plays->links() }}

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    @endsection