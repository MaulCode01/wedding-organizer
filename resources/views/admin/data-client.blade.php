<x-admin-layout>
<x-slot:title>Halaman Data Pengguna - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Admin</h4>
        <a href="{{ route('add.acount.admin') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Tambah
        </a>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                @forelse ($dataAdmin as $index => $acount )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $acount->username }}</td>
                        <td>{{ $acount->email }}</td>
                        <td>{{ $acount->role }}</td>
                        <td>
                            <a href="{{ route('edit.acount.admin', $acount->id ) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('delete.acount', $acount->id ) }}" method="POST" class="d-inline">
                                @csrf
                                @method('POST')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td class="text-center">Tidak ada data pengguna.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Pengguna</h4>
    </div>
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
                @forelse ($dataUser as $index => $acount )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $acount->username }}</td>
                        <td>{{ $acount->email }}</td>
                        <td>{{ $acount->role }}</td>
                        <td>
                            <form action="{{ route('delete.acount', $acount->id ) }}" method="POST" class="d-inline">
                                @csrf
                                @method('POST')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


</x-admin-layout>

