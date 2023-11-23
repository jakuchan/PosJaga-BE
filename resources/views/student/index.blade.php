@extends('layout/index')
@section('title', 'Siswa')

@section('content')
{{-- @dd('student') --}}

<br>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>TA</th>
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = $student->firstItem(); ?>
        @foreach ($student as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->NIS }}</td>
            <td>{{ $item->Nama }}</td>
            <td>{{ $item->Kelas }}</td>
            <td>{{ $item->Jurusan }}</td>
            <td>{{ $item->TA }}</td>
            <td><a href="{{ route('siswa.edit', $item->NIS) }}">Edit</a></td>
            <td>
                <form action="{{ route('siswa.destroy', $item->NIS) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </tbody>
</table>
{{ $student->links() }}

@endsection