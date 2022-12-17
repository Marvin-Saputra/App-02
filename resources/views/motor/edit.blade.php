@extends('adminlte::page')
@section('title', 'Update Data Motor')
@section('content_header')
 <h1 class="m-0 text-dark">Edit Data Motor</h1>
@stop
@section('content')
 <form action="{{route('motor.update', $motor)}}" method="post">
 @method('PUT')
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">

 <div class="form-group">
 <label for="Merk">Merk Motor</label>
 <input type="text" class="form-control
@error('Merk') is-invalid @enderror" id="Merk"
placeholder="Nama motor" name="Merk" value="{{$motor->Merk ?? old('Merk')}}">
 @error('Merk') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Tipe">Tipe</label>
 <input type="text" class="form-control
@error('Tipe') is-invalid @enderror" id="Tipe"
placeholder="Nama motor" name="Tipe" value="{{$motor->Tipe ?? old('Tipe')}}">
 @error('Tipe') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Jenis">Jenis motor</label>
 <input type="text" class="form-control
@error('Jenis') is-invalid @enderror" id="Jenis"
placeholder="Alamat motor" name="Jenis" value="{{$motor->Jenis ?? old('Jenis')}}">
 @error('Jenis') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Tahun">Slinder</label>
 <input type="text" class="form-control
@error('Slinder') is-invalid @enderror" id="Slinder"
placeholder="Alamat motor" name="Slinder" value="{{$motor->Slinder ?? old('Slinder')}}">
 @error('Slinder') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Tahun">Tahun</label>
 <input type="text" class="form-control
@error('Tahun') is-invalid @enderror" id="Tahun"
placeholder="Alamat motor" name="Tahun" value="{{$motor->Tahun ?? old('Tahun')}}">
 @error('Tahun') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Warna">Warna</label>
 <input type="text" class="form-control
@error('Warna') is-invalid @enderror" id="Warna"
placeholder="Alamat motor" name="Warna" value="{{$motor->Warna ?? old('Warna')}}">
 @error('Warna') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Hrg_Cash">Hrg_Cash</label>
 <input type="text" class="form-control
@error('Hrg_Cash') is-invalid @enderror" id="Hrg_Cash"
placeholder="Alamat motor" name="Hrg_Cash" value="{{$motor->Hrg_Cash ?? old('Hrg_Cash')}}">
 @error('Hrg_Cash') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btnprimary">Simpan</button>
 <a href="{{route('motor.index')}}" class="btn
btn-default">
 Batal
 </a>
 </div>
 </div>
 </div>
 </div>
@stop