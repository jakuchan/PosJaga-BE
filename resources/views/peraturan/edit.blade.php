@extends('layout/index')
@section('title', 'Edit Siswa')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
        <li> {{ $item }} </li>
        @endforeach
    </ul>
@endif
<br><br><br>
<form action="{{ route('peraturan.update', $data->Kode_Aturan) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>NIS:</td>
            <td><input type="text" name="kode_aturan" value="{{ $data->Kode_Aturan }}"></td>
        </tr>
        <tr>
            <td><label>Nama: </label></td>
            <td><input type="text" name="nama_aturan" value="{{ $data->Nama_Aturan }}"></td>
        </tr>
        <tr>
            <td><label>Poin: </label></td>
            <td><input type="text" name="poin" value="{{ $data->Poin }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Save</button></td>
        </tr>
    </table>
</form>
@endsection