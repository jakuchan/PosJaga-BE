@extends('layout/index')
@section('title', 'Edit Pengawas')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ul>
@endif
<br><br><br>
<form action="{{ route('pengawas.update', $data->NIP) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>NIP:</td>
            <td>{{ $data->NIP }}</td>
        </tr>
        <tr>
            <td><label>Nama: </label></td>
            <td><input type="text" name="nama" value="{{ $data->Nama }}"></td>
        </tr>
        <tr>
            <td><label>Status: </label></td>
            <td><input type="text" name="status" value="{{ $data->Status }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="save">Save</button></td>
        </tr>
    </table>
</form>
@endsection