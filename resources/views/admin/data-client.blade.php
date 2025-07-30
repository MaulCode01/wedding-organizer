<x-admin-layout>
<x-slot:title>Halaman Data Pengguna - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    {{-- Tombol Tambah Data --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Pengguna</h4>
        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus"></i> Tambah
        </a>
    </div>

    {{-- Tabel Data Pengguna --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-info">
                <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


</x-admin-layout>

