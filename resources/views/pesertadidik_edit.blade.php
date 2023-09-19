@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Peserta Didik Page</h1>
        </div>
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div> --}}
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit peserta didik</h3>
      </div>
      
      <div class="card-body">
        <a href="{{ route('pesertadidik.index') }}" class="btn btn-default">kembali</a>
        <br><br>
        <form action="{{ route('pesertadidik.update', $peserta->id) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label>NIS</label>
                <input name="nis" type="number" class="form-control" placeholder="..." value="{{ $peserta->nis }}">
                @error('nis')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Nama Lengkap</label>
                <input name="namalengkap" type="text" class="form-control" placeholder="..."value="{{ $peserta->namalengkap }}">
                @error('namalengkap')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>jenis kelamin</label>
                <select name="jk" class="form-control">
                    <option>-Pilih jenis kelamin-</option>
                    @if($peserta->jk == 'L') 
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                    @endif
                    @if($peserta->jk == 'P') 
                    <option value="L" >Laki-laki</option>
                    <option value="P" selected>Perempuan</option>
                    @endif
                </select>
                @error('jk')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Nilai</label>
                <input name="nilai" type="number" class="form-control" placeholder="..."value="{{ $peserta->nilai }}">
                @error('nilai')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-success" value="Edit" />
        </form> 
        </div>
        <!-- /.card-body -->
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  @endsection