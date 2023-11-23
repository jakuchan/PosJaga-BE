@extends('layout/index')
@section('title', 'Peraturan')

@section('content')

@if(session('success'))
    {{ session('success') }}
@endif
@if(session('failed'))
    {{ session('failed') }}
@endif
<br>
<table id="Wikwok">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Aturan</th>
            <th>Nama Aturan</th>
            <th>Poin</th>
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $i = $data->firstItem();
            function formatInt($int) {
                return sprintf('%03d', $int);
            }
        ?>
        @foreach ($data as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ formatInt($item->Kode_Aturan) }}</td>
            <td>{{ $item->Nama_Aturan }}</td>
            <td>{{ $item->Poin }}</td>
            <td><a href="{{ route('peraturan.edit', $item->Kode_Aturan) }}">Edit</a></td>
            <td>
                <form action="{{ route('peraturan.destroy', $item->Kode_Aturan) }}" method="post">
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
{{ $data->links() }}



<script>
    // $(document).ready( function () {
    //     $('#DataTable').DataTable();
    // });


    // const swalWithBootstrapButtons = Swal.mixin({
    //     customClass: {
    //         confirmButton: "btn btn-success",
    //         cancelButton: "btn btn-danger"
    //     },
    //     buttonsStyling: false
    // });
    // swalWithBootstrapButtons.fire({
    //     title: "Are you sure?",
    //     text: "You won't be able to revert this!",
    //     icon: "warning",
    //     showCancelButton: true,
    //     confirmButtonText: "Yes, delete it!",
    //     cancelButtonText: "No, cancel!",
    //     reverseButtons: true
    // }).then((result) => {
    //     if (result.isConfirmed) {
    //         swalWithBootstrapButtons.fire({
    //         title: "Deleted!",
    //         text: "Your file has been deleted.",
    //         icon: "success"
    //         });
    //     } else if (
    //         /* Read more about handling dismissals below */
    //         result.dismiss === Swal.DismissReason.cancel
    //     ) {
    //         swalWithBootstrapButtons.fire({
    //         title: "Cancelled",
    //         text: "Your imaginary file is safe :)",
    //         icon: "error"
    //         });
    //     }
    // });
</script>

@endsection