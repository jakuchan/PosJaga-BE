@extends('layout/index')
@section('title', 'Tambah Pengawas')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ul>  
@endif
<br><br><br>
<form action=" {{ url('pengawas') }}" method="post">
    @csrf
    <input type="text" placeholder="NIP" name="nip">
    <input type="text" placeholder="Nama" name="nama">
    <input type="text" placeholder="Status" name="status">
    <button type="submit" name="save">Save</button>
</form>
@endsection