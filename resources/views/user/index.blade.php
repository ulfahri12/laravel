<div class="row">
    <div class="col-sm-6">
        <h3 class="mb-0">{{ $menu }}</h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">{{ $submenu }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $menu }}</li>
        </ol>
    </div>
</div>

<table id="example" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th> <!-- Kalau kamu pakai role admin/karyawan -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role ?? '-' }}</td>
                <td>
                    @if (Auth::user()->role === 'admin')
                        <!-- Menu khusus admin -->
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    @endif
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="{{ asset('template/datatables/datatables.js') }}"></script>
<script src="{{ asset('template/datatables/datatables.min.js') }}"></script>
<script type="text/javascript">
    new DataTable('#example', {
        layout: {
            topStart: ['pageLength'],
            topEnd: ['search'],
            bottomStart: ['buttons'],
            bottomEnd: ['paging']
        },
        buttons: [{
                extend: 'print',
                className: 'btn btn-info'
            },
            {
                extend: 'excel',
                className: 'btn btn-info'
            },
            {
                extend: 'pdf',
                className: 'btn btn-info'
            }
        ],
        language: {
            lengthMenu: "Show _MENU_ entri",
        }
    });

//     setTimeout(() => {
//     const searchInput = document.querySelector('div.dt-search input[type="search"]');
//     if (searchInput) {
//         searchInput.style.width = '250px'; // Atur lebar sesuai kebutuhan
//         searchInput.placeholder = 'Cari data...'; // Opsional
//     } else {
//         console.warn("Input search tidak ditemukan");
//     }
// }, 200);
</script>
