@extends ('layout.main')

@section ('container')
<section class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">FORM TAMBAH DATA</h1> <!-- mengambil dari template engine $NAMA_PELANGGAN -->   
   
        <form method="post" action="/plays">
        @csrf
     
          <div class="form-group">
            <label for="NAMA_PELANGGAN">NAMA PELANGGAN</label>
            <input type="text" class="form-control @error('NAMA_PELANGGAN') is-invalid @enderror" id="NAMA_PELANGGAN" placeholder="Masukan NAMA PELANGGAN" name="NAMA_PELANGGAN" value="{{old('NAMA_PELANGGAN')}}" required>
            @error ('NAMA_PELANGGAN')
            <div class="invalid-feedback">{{ $message }}</div> 
            @enderror
          </div>

          <div class="form-group">
            <label for="RESI">RESI</label>
            <input type="number" class="form-control @error('RESI') is-invalid @enderror" id="RESI" placeholder="Masukan RESI" name="RESI" value="{{old('RESI')}}" readonly>
            @error ('RESI')
            <div class="invalid-feedback">{{ $message }}</div> 
            @enderror
          </div>

          <div class="form-group">
            <label for="NO_HP">NO HP</label>
            <input type="text" class="form-control" id="NO_HP" placeholder="Masukan NO HP" name="NO_HP" value="{{old('NO_HP')}}" required>
          </div>

          <div class="form-group">
            <label for="TANGGAL_MASUK">TANGGAL_MASUK</label>
            <input type="date" data-format-string="YYYY MM DD" class="form-control" id="TANGGAL_MASUK" placeholder="Masukan TANGGAL_MASUK" name="TANGGAL_MASUK" value="{{old('TANGGAL_MASUK')}}">
          </div>
          <div class="form-group">
            <label for="KERUSAKAN">KERUSAKAN</label>
            <input type="text" class="form-control" id="KERUSAKAN" placeholder="Masukan KERUSAKAN" name="KERUSAKAN" value="{{old('KERUSAKAN')}}">
          </div>
          <div class="form-group">
            <label for="TINDAKAN">TINDAKAN</label>
            <input type="text" class="form-control" id="TINDAKAN" placeholder="Masukan TINDAKAN" name="TINDAKAN" value="{{old('TINDAKAN')}}">
          </div>
          <div class="form-group">
            <label for="STATUS">STATUS</label>
            <input type="text" class="form-control" id="STATUS" placeholder="Masukan STATUS" name="STATUS" value="{{old('STATUS')}}">
          </div>
          <div class="form-group">
            <label for="BIAYA">BIAYA</label>
            <input type="text" class="form-control" id="BIAYA" placeholder="Masukan BIAYA" name="BIAYA" value="{{old('BIAYA')}}">
          </div>
          <div class="form-group">
            <label for="TANGGAL_KELUAR">TANGGAL_KELUAR</label>
            <input type="date" data-format-string="YYYY MM DD" class="form-control" id="TANGGAL_KELUAR" placeholder="KELUARan TANGGAL_KELUAR" name="TANGGAL_KELUAR" value="{{old('TANGGAL_KELUAR')}}">
          </div>
          <div class="form-group">
            <label for="KETERANGAN">KETERANGAN</label>
            <input type="text" class="form-control" id="KETERANGAN" placeholder="Masukan KETERANGAN" name="KETERANGAN" value="{{old('KETERANGAN')}}">
          </div>

            <button type="submit" class="btn btn-primary my-4">SUBMIT DATA</button>
  
        </form>
      </div> 
    </div>
  </div>
	</div>
</div>
@stop