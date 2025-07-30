<x-admin-layout>
<x-slot:title>Hero Client - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    <div class="card shadow-sm bg-white">
        <div class="card-body">
            <h5 class="card-title mb-4">Input Konten Halaman Client</h5>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Judul (Title)</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul konten">
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-semibold">Subjudul (Subtitle)</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Masukkan subjudul konten">
                        </div>

                        <div class="mb-3">
                            <label for="label" class="form-label fw-semibold">Label</label>
                            <input type="text" class="form-control" id="label" name="label" placeholder="Masukkan label tombol / call to action">
                        </div>
                    </div>

                    {{-- Kolom Kanan --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image1" class="form-label fw-semibold">Gambar Utama</label>
                            <input class="form-control" type="file" id="image1" name="image1" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="image2" class="form-label fw-semibold">Gambar Kedua</label>
                            <input class="form-control" type="file" id="image2" name="image2" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="image3" class="form-label fw-semibold">Gambar Ketiga</label>
                            <input class="form-control" type="file" id="image3" name="image3" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan Konten
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-admin-layout>

