<x-client-layout>
<x-slot:title>Produk Checkout - DiaryProject_ia</x-slot:title>

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
                <!-- Contoh data -->
                <tr>
                    <td>1</td>
                    <td>Paket Pernikahan Elegan</td>
                    <td>20 Agustus 2025</td>
                    <td>
                        <span class="badge bg-warning text-dark">Menunggu Konfirmasi</span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                            <i class="bi bi-upload"></i> Upload
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger">
                            <i class="bi bi-x-circle"></i> Batalkan
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Paket Dekorasi Simple</td>
                    <td>15 September 2025</td>
                    <td>
                        <span class="badge bg-success">Dikonfirmasi</span>
                    </td>
                    <td>
                        <a href="bukti.jpg" target="_blank" class="btn btn-sm btn-outline-success">
                            <i class="bi bi-eye"></i> Lihat
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-secondary" disabled>
                            <i class="bi bi-check-circle"></i> Selesai
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Upload Bukti -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="#" method="POST" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Bukti Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="bukti" class="form-label">Pilih File</label>
                    <input type="file" class="form-control" id="bukti" name="bukti" accept="image/*,application/pdf" required>
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


</x-client-layout>
