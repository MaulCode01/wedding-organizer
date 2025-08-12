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
    <h4>Update Paket Produk</h4>
        <form action="{{ route('admin.package.update', $package->id ) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" name="nama_paket" id="nama_paket" class="form-control" value="{{ old('nama_paket', $package->nama_paket) }}" required>
            @error('nama_paket') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket</label>
            <input type="text" name="harga" id="harga" class="form-control input-harga" value="{{ old('harga', $package->harga) }}" required>
            @error('harga')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur Utama (Pisahkan dengan koma)</label>
            <input type="text" name="fitur_1" id="fitur" class="form-control" value="{{ old('fitur_2', is_array($package->fitur_1) ? implode(',', $package->fitur_1) : '') }}">
            @error('fitur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur Tambahan (Pisahkan dengan koma)</label>
            <input type="text" name="fitur_2" id="fitur" class="form-control" value="{{ old('fitur_2', is_array($package->fitur_2) ? implode(',', $package->fitur_2) : '') }}">
            @error('fitur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskrisi" class="form-label">Deskripsi Paket</label>
            <textarea name="description_content" id="deskrisi" class="form-control">{{ old('description_content', $package->description_content) }}</textarea>
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
