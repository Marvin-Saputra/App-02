@extends('adminlte::page')
@section('title', 'Data Obat')
@section('content_header')
 <h1 class="m-0 text-dark"> Data Obat</h1>
@stop
@section('content')
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <a href="{{route('obat.create')}}" class="btn
btn-primary mb-2">
 Tambah
 </a>
 <table class="table table-hover table-bordered
table-stripped" id="example2">
 <thead>
<tr>
 <th>No.</th>
 <th>Nama Obat</th>
 <th>Jenis Obat</th>
 <th>Kategori</th>
 <th>Harga Obat</th>
 <th>Jumlah Obat</th>
 <th>Opsi</th>
 </tr>
</thead>
<tbody>
@foreach($obat as $key => $bs)
 <tr>
 <td>{{$key+1}}</td>
 <td>{{$bs->Nama_Obt}}</td>
 <td>{{$bs->Jenis_Obt}}</td>
 <td>{{$bs->Kategori}}</td>
 <td>{{$bs->Hrg_Obt}}</td>
 <td>{{$bs->Jmlh_Obt}}</td>


 <td>
 <a href="{{route('obat.edit',
$bs)}}" class="btn btn-primary btn-xs">
 Edit
 </a>
<a href="{{route('obat.destroy',
$bs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btndanger btn-xs">
 Delete
 </a>
 </td>
 </tr>
 @endforeach
</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
@stop
@push('js')
 <form action="" id="delete-form" method="post">
 @method('delete')
 @csrf
 </form>
 <script>
 $('#example2').DataTable({
 "responsive": true,
 });
 function notificationBeforeDelete(event, el) {
 event.preventDefault();
 if (confirm('Apakah anda yakin akan menghapus data ? ')) {
 $("#delete-form").attr('action', $(el).attr('href'));
 $("#delete-form").submit();
 }
 }
 </script>
@endpush