<x-admin-layout>
<x-slot:title>Fitur Transaksi - DiaryProject_ia</x-slot:title>

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
        <h4 class="mb-3">Data Transaksi</h4>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Nama User</th>
                    <th>Nama Paket</th>
                    <th>Jumlah Bayar</th>
                    <th>Bukti bayar</th>
                    <th>Status</th>
                    <th style="width: 25%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $trx)
                    <tr>
                        <td>{{ $trx->id }}</td>
                        <td>{{ $trx->user->nama_lengkap }}</td>
                        <td>{{ $trx->booking->package->nama_paket }}</td>
                        <td>Rp {{ number_format($trx->jumlah_bayar, '0', ',', '.') }}</td>
                        <td>
                            @if($trx->bukti_bayar)
                                <a href="{{ asset('aset/bukti/' . $trx->bukti_bayar) }}" target="_blank">Lihat Bukti</a>
                            @else
                                <span class="text-muted">Belum Upload</span>
                            @endif
                        </td>
                        <td>
                            @if($trx->status === 'belum_lunas')
                                <span class="badge bg-warning text-dark">Belum Lunas</span>
                            @elseif($trx->status === 'lunas')
                                <span class="badge bg-success">Lunas</span>
                            @elseif($trx->status === 'gagal')
                                <span class="badge bg-danger">Gagal</span>
                            @endif
                        </td>
                        <td>
                            @if($trx->status === 'belum_lunas')
                                <form action="{{ route('admin.transaksi.confirm', $trx->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <i class="bi bi-check-circle"></i> Konfirmasi Lunas
                                    </button>
                                </form>
                            @elseif($trx->status === 'lunas')
                                <a href="{{ route('admin.trasaksi.kwetansi', $trx->id) }}" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="bi bi-printer"></i> Cetak Struk
                                </a>
                            @endif

                            <form action="{{ route('admin.transaksi.hapus', $trx->id) }}" method="POST" class="d-inline">
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
                        <td colspan="6" class="text-center">Belum ada transaksi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</x-admin-layout>
