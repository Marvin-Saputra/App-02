@extends('adminlte::page')
@section('title', 'Data Motor')
@section('content_header')
 <h1 class="m-0 text-dark"> Data Motor</h1>
@stop
@section('content')
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 <a href="{{route('motor.create')}}" class="btn
btn-primary mb-2">
 Tambah
 </a>
 <table class="table table-hover table-bordered
table-stripped" id="example2">
 <thead>
<tr>
 <th>No.</th>
 <th>Merk</th>
 <th>Tipe</th>
 <th>Jenis</th>
 <th>Slinder</th>
 <th>Tahun</th>
 <th>Warna</th>
 <th>Harga Cash</th>
 <th>Opsi</th>
 </tr>
</thead>
<tbody>
@foreach($motor as $key => $bs)
 <tr>
 <td>{{$key+1}}</td>
 <td>{{$bs->Merk}}</td>
 <td>{{$bs->Tipe}}</td>
 <td>{{$bs->Jenis}}</td>
 <td>{{$bs->Slinder}}</td>
 <td>{{$bs->Tahun}}</td>
 <td>{{$bs->Warna}}</td>
 <td>{{$bs->Hrg_Cash}}</td>




 <td>
 <a href="{{route('motor.edit',
$bs)}}" class="btn btn-primary btn-xs">
 Edit
 </a>
<a href="{{route('motor.destroy',
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