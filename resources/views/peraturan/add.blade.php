@extends('layout/index')
@section('title', 'Tambah Aturan')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
        <li> {{ $item }} </li>
        @endforeach
    </ul>  
@endif
<br><br><br>
<form action=" {{ url('peraturan') }}" method="post">
    @csrf
    <input type="text" placeholder="Kode Aturan" name="kode_aturan">
    <input type="text" placeholder="Nama Aturan" name="nama_aturan">
    <input type="text" placeholder="Poin" name="poin">
    <button type="submit" name="save">Save</button>
</form>
@endsection