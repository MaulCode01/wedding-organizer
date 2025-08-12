<x-admin-layout>
<x-slot:title>Fitur Booking - DiaryProject_ia</x-slot:title>

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
    <div class="table-responsive">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Data Transaksi</h4>
        </div>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Nama User</th>
                    <th>Paket</th>
                    <th>Tanggal Acara</th>
                    <th>Status</th>
                    <th>Bukti Pembayaran</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($booking as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->user->nama_lengkap }}</td>
                        <td>{{ $data->package->nama_paket }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->tanggal_acara)->translatedFormat('d F Y') }}</td>
                        <td>
                            @if($data->status === 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($data->status === 'disetujui')
                                <span class="badge bg-success">disetujui</span>
                            @elseif($data->status === 'dibatalkan')
                                <span class="badge bg-danger">dibatalkan</span>
                            @elseif($data->status === 'selesai')
                                <span class="badge bg-primary">selesai</span>
                            @endif
                        </td>
                        <td>
                            @if($data->bukti_pembayaran)
                                <a href="{{ asset('aset/bukti/' . $data->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a>
                            @else
                                <span class="text-muted">Belum Upload</span>
                            @endif
                        </td>
                        <td style="d-flex">
                            @if($data->bukti_pembayaran && $data->status != 'disetujui')
                                <form action="{{ route('admin.booking.verify', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Konfirmasi</button>
                                </form>
                            @else
                                <button class="btn btn-secondary btn-sm" disabled>Konfirmasi</button>
                            @endif

                            <form action="{{ route('admin.booking.delete', $data->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Belum ada booking yang masuk</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


</x-admin-layout>
