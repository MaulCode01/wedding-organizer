<x-admin-layout>
<x-slot:title>Halaman Booking - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Booking</h4>
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
                <th scope="col" style="width: 5%;">Id</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">No WhatsApp/HP</th>
                <th scope="col">Lokasi Acara</th>
                <th scope="col">Tanggal Acara</th>
                <th scope="col">Kategori</th>
                <th scope="col">Catatan</th>
                <th scope="col">Status</th>
                <th scope="col" style="width: 20%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($booking as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->kontak }}</td>
                    <td>{{ $data->lokasi_acara }}</td>
                    <td>{{ \Carbon\Carbon::parse(time: $data->tanggal_acara)->format('d-m-Y') }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->catatan ?? '-' }}</td>
                    <td>
                        @if($data->status->value === 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($data->status->value === 'confirmed')
                            <span class="badge bg-success">Confirmed</span>
                        @elseif($data->status->value === 'cancelled')
                            <span class="badge bg-danger">Cancelled</span>
                        @else
                            <span class="badge bg-secondary">Unknown</span>
                        @endif
                    </td>
                    <td>
                        @if($data->status == 'pending')
                            <form action="{{ route('booking.update.status', $data->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="status" value="confirmed">
                                <button class="btn btn-sm btn-success" onclick="return confirm('Yakin verifikasi booking ini?')">
                                    <i class="bi bi-check2-circle"></i> Verifikasi
                                </button>
                            </form>
                        @endif

                        <form action="{{ route('booking.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus booking ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Belum ada booking</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</div>

</x-admin-layout>

