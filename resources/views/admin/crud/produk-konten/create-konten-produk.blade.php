<x-admin-layout>
<x-slot:title>Buat Data Produk - DiaryProject_ia</x-slot:title>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        {{ $errors->first('kategori') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="container mt-4">
    <h4>Tambah Konten Produk</h4>
    <form action="{{ route('admin.content.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kategori" class="form-label">Pilih Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Wedding">Wedding</option>
                <option value="Prewed">Prewed</option>
                <option value="Dekorasi">Dekorasi</option>
                <option value="MUA">MUA</option>
                <option value="Dokumentasi">Dokumentasi</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="judul_konten" class="form-label">Judul Konten</label>
            <input type="text" name="judul_konten" id="judul_konten" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi_konten" class="form-label">Deskripsi Konten</label>
            <textarea name="deskripsi_konten" id="deskripsi_konten" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur (Pisahkan dengan koma)</label>
            <input type="text" name="fitur" id="fitur" class="form-control">
        </div>

        <div class="mb-3">
            <label for="image_konten" class="form-label">Gambar Konten</label>
            <input type="file" name="image_konten" id="image_konten" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.produk.dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

</x-admin-layout>
