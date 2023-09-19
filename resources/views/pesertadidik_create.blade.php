@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Peserta Didik Page</h1>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah data peserta didik</h3>
      </div>
      
      <div class="card-body">
        <a href="{{ route('pesertadidik.index') }}" class="btn btn-default">kembali</a>
        <br><br>
        <form action="{{ route('pesertadidik.store') }}" method="POST">
            @csrf
            <div>
                <label>NIS</label>
                <input name="nis" type="number" class="form-control" placeholder="...">
                @error('nis')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Nama Lengkap</label>
                <input name="namalengkap" type="text" class="form-control" placeholder="...">
                @error('namalengkap')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>jenis kelamin</label>
                <select name="jk" class="form-control">
                    <option>-Pilih jenis kelamin-</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jk')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Nilai</label>
                <input name="nilai" type="number" class="form-control" placeholder="...">
                @error('nilai')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-success" value="Tambah" />
        </form> 
        </div>
        <!-- /.card-body -->
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  @endsection