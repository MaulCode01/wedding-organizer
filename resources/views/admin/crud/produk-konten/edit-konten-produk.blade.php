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
    <h4>Edit Konten Produk</h4>
    <form action="{{ route('admin.content.update', $content->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select id="kategori" class="form-select @error('kategori') is-invalid @enderror" disabled>
                <option value="Wedding" {{ $content->kategori == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                <option value="Prewed" {{ $content->kategori == 'Prewed' ? 'selected' : '' }}>Prewed</option>
                <option value="Dekorasi" {{ $content->kategori == 'Dekorasi' ? 'selected' : '' }}>Dekorasi</option>
                <option value="MUA" {{ $content->kategori == 'MUA' ? 'selected' : '' }}>MUA</option>
                <option value="Dokumentasi" {{ $content->kategori == 'Dokumentasi' ? 'selected' : '' }}>Dokumentasi</option>
            </select>
            <input type="hidden" name="kategori" value="{{ $content->kategori }}">
            @error('kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="judul_konten" class="form-label">Judul Konten</label>
            <input type="text" name="judul_konten" id="judul_konten" class="form-control" value="{{ old('judul_konten', $content->judul_konten) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi_konten" class="form-label">Deskripsi Konten</label>
            <textarea name="deskripsi_konten" id="deskripsi_konten" class="form-control" rows="4">{{ old('deskripsi_konten', $content->deskripsi_konten) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fitur" class="form-label">Fitur (Pisahkan dengan koma)</label>
            <input type="text" name="fitur" id="fitur" class="form-control"
                   value="{{ old('fitur', is_array($content->fitur) ? implode(',', $content->fitur) : '') }}">
        </div>

        <div class="mb-3">
            <label for="image_konten" class="form-label">Gambar Konten</label><br>
            @if($content->image_konten)
                <img src="{{ asset('storage/'.$content->image_konten) }}" alt="Gambar Konten" width="200" class="mb-2"><br>
            @endif
            <input type="file" name="image_konten" id="image_konten" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.produk.dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>


</x-admin-layout>
