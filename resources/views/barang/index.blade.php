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
<a href="manage-barang/tambah" class="btn btn-success">Tambah Barang</a>
<table id="example" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $index => $barang)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $barang->kode }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->merk }}</td>
                <td>{{ $barang->kategori->nama_kategori }}</td>
                <td>{{ $barang->stok_awal }}</td>
                <td>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
                <td>
                    @if (Auth::user()->role === 'admin')
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    @endif
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Hanya load salah satu versi datatables, tidak perlu keduanya -->
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
                className: 'btn btn-info',
                text: '<i class="fas fa-print"></i> Print'
            },
            {
                extend: 'excel',
                className: 'btn btn-info',
                text: '<i class="fas fa-file-excel"></i> Excel'
            },
            {
                extend: 'pdf',
                className: 'btn btn-info',
                text: '<i class="fas fa-file-pdf"></i> PDF'
            }
        ],
        language: {
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            search: "Cari:",
            zeroRecords: "Data tidak ditemukan",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
            infoFiltered: "(disaring dari _MAX_ total data)"
        },
        responsive: true
    });
</script>