<x-admin-layout>
<x-slot:title>Buat Data Produk - DiaryProject_ia</x-slot:title>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        {{ $errors->first() }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="container mt-4">
    <h4>Tambah Paket Produk</h4>
        <form action="{{ route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select name="content_id" id="product_id" class="form-select @error('content_id') is-invalid @enderror" required>
                <option value="">-- Pilih Produk --</option>
                @foreach($product as $p)
                    <option value="{{ $p->id }}" {{ old('content_id') == $p->id ? 'selected' : '' }}>
                        {{ $p->judul }} ({{ $p->kategori }})
                    </option>
                @endforeach
            </select>
            @error('content_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" name="nama_paket" id="nama_paket" class="form-control" required>
            @error('nama_paket') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket</label>
            <input type="text" name="harga" id="harga" class="form-control input-harga" required>
            @error('harga')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur Utama (Pisahkan dengan koma)</label>
            <input type="text" name="fitur_1" id="fitur" class="form-control">
            @error('fitur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur Tambahan (Pisahkan dengan koma)</label>
            <input type="text" name="fitur_2" id="fitur" class="form-control">
            @error('fitur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskrisi" class="form-label">Deskripsi Paket</label>
            <textarea name="description_content" id="deskrisi" class="form-control"></textarea>
            @error('fitur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image_konten" class="form-label">Gambar Paket</label>
            <input type="file" name="image_package" id="image_konten" class="form-control">
            @error('image_package')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.produk.dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>


</x-admin-layout>
