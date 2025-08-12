<x-admin-layout>
<x-slot:title>Layanan Dekorasi - DiaryProject_ia</x-slot:title>

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

<div class="container mt-4">
    {{-- Konten Produk --}}
    <div class="table-responsive mb-5">
        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Konten Produk</h4>
            <a href="{{ route('admin.content.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Konten
            </a>
        </div> --}}
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Judul Konten</th>
                    <th>Deskripsi</th>
                    <th>Fitur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contents as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->kategori }}</td>
                    <td>{{ $c->judul_konten }}</td>
                    <td>{{ $c->deskripsi_konten }}</td>
                    <td>
                        @if(!empty( $c->fitur_1) && is_array( $c->fitur_1))
                            @foreach( $c->fitur_1 as  $fitur)
                                <div class="spec-item">
                                    <i class="bi bi-check-circle"></i>
                                    <span>{{ $fitur }}</span>
                                </div>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.content.edit', $c->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        {{-- <form action="{{ route('admin.content.destroy', $c->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus konten ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form> --}}
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center">Belum ada konten produk.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Paket Produk --}}
    <div class="table-responsive">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Paket Produk</h4>
            <a href="{{ route('admin.package.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Paket
            </a>
        </div>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Konten</th>
                    <th>Fitur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($packages as $pk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pk->nama_paket }}</td>
                    <td>Rp {{ number_format($pk->harga, 0, ',', '.') }}</td>
                    <td>{{ $pk->content->judul_konten ?? '-' }}</td>
                    <td>
                        @if(!empty($pk->fitur_1))
                            @php $fiturList = is_array($pk->fitur_1) ? $pk->fitur_1 : json_decode($pk->fitur_1, true); @endphp
                            <ul class="mb-0">
                                @foreach( $pk->fitur_1 as $fitur)
                                    <div class="spec-item">
                                        <i class="bi bi-check-circle"></i>
                                        <span>{{ $fitur }}</span>
                                    </div>
                                @endforeach
                            </ul>
                        @else
                            <em>-</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.package.edit', $pk->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('admin.package.destroy', $pk->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus paket ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center">Belum ada data paket.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</x-admin-layout>

