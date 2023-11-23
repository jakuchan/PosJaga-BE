@extends('layout/index')
@section('title', 'Tambah Siswa')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ul>  
@endif
<br><br><br>
<form action=" {{ url('siswa') }}" method="post">
    @csrf
    <input type="text" placeholder="NIS" name="nis">
    <input type="text" placeholder="Nama" name="nama">
    <input type="text" placeholder="Kelas" name="kelas">
    <input type="text" placeholder="Jurusan" name="jurusan">
    <input type="text" placeholder="TA" name="ta">
    <button type="submit" name="save">Save</button>
</form>
@endsection