@extends('layout/index')
@section('title', 'Pengawas')

@section('content')

<br>
<table id="Wikwok">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Status</th>
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = $pengawas->firstItem(); ?>
        @foreach ($pengawas as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->NIP }}</td>
            <td>{{ $item->Nama }}</td>
            <td>{{ $item->Status }}</td>
            <td><a href="{{ route('pengawas.edit', $item->NIP) }}">Edit</a></td>
            <td>
                <form action="{{ route('pengawas.destroy', $item->NIP) }}" method="post">
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
{{ $pengawas->links() }}



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