@extends('layout/index')
@section('title', 'Add Student')

@section('content')

@if($errors -> any())
    <ul>
        @foreach ($errors->all() as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ul>
@endif
<br><br><br>
<form action=" {{ url('student/'.$data->NIS) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>NIS:</td>
            <td>{{ $data->NIS }}</td>
        </tr>
        <tr>
            <td><label>Nama: </label></td>
            <td><input type="text" name="nama" value="{{ $data->Nama }}"></td>
        </tr>
        <tr>
            <td><label>Kelas: </label></td>
            <td><input type="text" name="kelas" value="{{ $data->Kelas }}"></td>
        </tr>
        <tr>
            <td><label>Jurusan: </label></td>
            <td><input type="text" name="jurusan" value="{{ $data->Jurusan }}"></td>
        </tr>
        <tr>
            <td><label>TA: </label></td>
            <td><input type="text" name="ta" value="{{ $data->TA }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="save">Save</button></td>
        </tr>
    </table>
</form>
@endsection