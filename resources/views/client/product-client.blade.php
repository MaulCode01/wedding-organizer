<x-client-layout>
<x-slot:title>Produk Checkout - DiaryProject_ia</x-slot:title>

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

<div class="container my-4">
    <h3 class="mb-4">Produk Saya</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Tanggal Acara</th>
                    <th>Status</th>
                    <th>Bukti Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataBooking as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->package->nama_paket }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->tanggal_acara)->translatedFormat('d F Y') }}</td>
                        <td>
                            @if($booking->status == 'pending')
                                <span class="badge bg-warning text-dark">Menunggu Konfirmasi</span>
                            @elseif($booking->status == 'disetujui')
                                <span class="badge bg-success">Dikonfirmasi</span>
                            @elseif($booking->status == 'dibatalkan')
                                <span class="badge bg-danger">Dibatalkan</span>
                            @else
                                <span class="badge bg-secondary">{{ ucfirst($booking->status) }}</span>
                            @endif
                        </td>
                        <td>
                            @if($booking->bukti_pembayaran)
                                <a href="{{ asset('aset/bukti/' . $booking->bukti_pembayaran) }}" target="_blank" class="btn btn-sm btn-outline-success">
                                    <i class="bi bi-eye"></i> Lihat
                                </a>
                            @else
                                @if($booking->status == 'dibatalkan')
                                    <button class="btn btn-sm btn-outline-secondary" disabled>
                                        <i class="bi bi-upload"></i> Upload (Dibatalkan)
                                    </button>
                                @else
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#uploadModal"
                                        data-booking-id="{{ $booking->id }}">
                                        <i class="bi bi-upload"></i> Upload
                                    </button>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if($booking->status == 'pending')
                                <form method="POST" action="{{ route('booking.cancel', $booking->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Batalkan booking ini?')">
                                        <i class="bi bi-x-circle"></i> Batalkan
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-sm btn-secondary" disabled>
                                    <i class="bi bi-check-circle"></i> Selesai
                                </button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data booking</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('booking.upload') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <input type="hidden" name="booking_id" id="booking_id" value="">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Uang Muka</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="bukti" class="form-label">Pilih File</label>
                    <input type="file" class="form-control" id="bukti" name="bukti_pembayaran" accept="image/*,application/pdf" required>
                    <small class="text-muted">Format yang diperbolehkan: JPG, PNG, atau PDF.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-upload"></i> Upload
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    var uploadModal = document.getElementById('uploadModal');
    uploadModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var bookingId = button.getAttribute('data-booking-id');
        var inputBookingId = uploadModal.querySelector('#booking_id');
        inputBookingId.value = bookingId;
    });
</script>


</x-client-layout>
