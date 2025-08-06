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
    <h4>Tambah Paket Produk</h4>
    <form action="{{ route('admin.package.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select name="content_id" id="product_id" class="form-select" required>
                <option value="">-- Pilih Produk --</option>
                @foreach($product as $p)
                    <option value="{{ $p->id }}">{{ $p->judul_konten }} ({{ $p->kategori }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" name="nama_paket" id="nama_paket" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket</label>
            <input type="text" name="harga" id="harga" class="form-control input-harga" required>
        </div>
        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur (Pisahkan dengan koma)</label>
            <input type="text" name="fitur" id="fitur" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image_konten" class="form-label">Gambar Konten</label>
            <input type="file" name="image_package" id="image_konten" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.produk.dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>


</x-admin-layout>
