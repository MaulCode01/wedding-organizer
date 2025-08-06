<x-admin-layout>
<x-slot:title>Halaman Konsultasi - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Konsultasi</h4>
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
                <th scope="col">No WhatsApp</th>
                <th scope="col">Alamat Lengkap</th>
                <th scope="col">Konsultasi</th>
                <th scope="col">Status</th>
                <th scope="col" style="width: 20%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($konsult as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>
                        @php
                            $waNumber = preg_replace('/[^0-9]/', '', $data->kontak);
                            if(substr($waNumber, 0, 1) === '0') {
                                $waNumber = '62'.substr($waNumber, 1);
                            }
                            $waMessage = "Halo {$data->nama_lengkap}, kami dari Wedding Organizer Diary Project ingin mengkonfirmasi Konsultasi Anda dengan kami pada tanggal ".\Carbon\Carbon::parse($data->tanggal_acara)->format('d-m-Y').". Lokasi: {$data->lokasi_acara}, Ada yang ingin ditanyakan?";
                            $waLink = "https://wa.me/{$waNumber}?text=".urlencode($waMessage);
                        @endphp

                        <a href="{{ $waLink }}" target="_blank" class="btn btn-success btn-sm">
                            <i class="bi bi-whatsapp"></i> {{ $data->kontak }}
                        </a>
                    </td>
                    <td>{{ $data->alamat_lengkap }}</td>
                    <td>{{ $data->catatan ?? '-' }}</td>
                    <td>
                        @if($data->status->value === 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($data->status->value === 'confirm')
                            <span class="badge bg-success">Confirmed</span>
                        @elseif($data->status->value === 'cancel')
                            <span class="badge bg-danger">Cancelled</span>
                        @else
                            <span class="badge bg-secondary">Unknown</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group btn-group d-flex gap-2" role="group">
                            @if($data->status->value === 'pending')
                                <form action="{{ route('konsult.update.status', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="confirm">
                                    <button class="btn btn-sm btn-success" onclick="return confirm('Yakin verifikasi booking ini?')">
                                        <i class="bi bi-check2-circle"></i> Verifikasi
                                    </button>
                                </form>

                                <form action="{{ route('konsult.update.status', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="cancel">
                                    <button class="btn btn-sm btn-warning" onclick="return confirm('Yakin batalkan booking ini?')">
                                        <i class="bi bi-x-circle"></i> Cancel
                                    </button>
                                </form>
                            @endif

                            <form action="{{ route('konsult.destroy', $data->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus booking ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>

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

