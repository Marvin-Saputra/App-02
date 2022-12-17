@extends('adminlte::page')
@section('title', 'Tambah Data Motor')
@section('content_header')
 <h1 class="m-0 text-dark">Tambah Data Motor</h1>
@stop
@section('content') 
 <form action="{{route('motor.store')}}" method="post">
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <div class="form-group">
 <label for="Merk">Merk Motor</label>
 <input type="text" class="form-control
@error('bidangstudi') is-invalid @enderror" id="Merk"
placeholder="Merk motor" name="Merk"
value="{{old('Merk')}}">
 @error('Merk') <span class="textdanger">{{$message}}</span> @enderror
 </div>
  <div class="form-group">
 <label for="Tipe">Tipe</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Tipe"
placeholder="Tipe" name="Tipe"
value="{{old('Tipe')}}">
 @error('Tipe') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Jenis">Jenis motor</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Jenis"
placeholder="Alamat motor" name="Jenis"
value="{{old('Jenis')}}">
 @error('Jenis') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Slinder">Slinder motor</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Slinder"
placeholder="No Telepon motor" name="Slinder"
value="{{old('Slinder')}}">
 @error('Slinder') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Tahun">Tahun</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Tahun"
placeholder="No Telepon motor" name="Tahun"
value="{{old('Tahun')}}">
 @error('Tahun') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Warna">Warna</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Warna"
placeholder="No Telepon motor" name="Warna"
value="{{old('Warna')}}">
 @error('Warna') <span class="textdanger">{{$message}}</span> @enderror
 </div>
 <div class="form-group">
 <label for="Hrg_Cash">Harga Cash</label>
 <input type="text" class="form-control
@error('') is-invalid @enderror" id="Hrg_Cash"
placeholder="No Telepon motor" name="Hrg_Cash"
value="{{old('Hrg_Cash')}}">
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