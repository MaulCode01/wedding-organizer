<x-admin-layout>
<x-slot:title>Halaman Tentang Kami - DiaryProject_ia</x-slot:title>

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
    <div class="card shadow-sm bg-white">
        <div class="card-body">
            <h5 class="card-title mb-4">Input Konten Halaman Client</h5>
            <form action="{{ route('about.update',  $About->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $About->title) }}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-semibold">Subjudul</label>
                            <textarea class="form-control" id="subtitle" name="subTitle" required>{{ old('SubTitle', $About->SubTitle) }}</textarea>
                            @error('subTitle')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="label" class="form-label fw-semibold">alamat</label>
                            <input type="text" class="form-control" id="label" name="alamat" value="{{ old('alamat', $About->alamat ) }}">
                            @error('label')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="label" class="form-label fw-semibold">Kontak</label>
                            <input type="text" class="form-control" id="label" name="kontak" value="{{ old('kontak', $About->kontak ) }}">
                            @error('label')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image1" class="form-label fw-semibold">Gambar Utama</label>
                            <input class="form-control" type="file" id="image1" name="image_1" accept="image/*" onchange="previewImage(event, 'preview1')">
                            <div class="mt-2">
                                <img id="preview1" src="" alt="Preview Gambar Utama" class="img-fluid rounded d-none" style="max-height:200px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image2" class="form-label fw-semibold">Gambar Kedua</label>
                            <input class="form-control" type="file" id="image2" name="image_2" accept="image/*" onchange="previewImage(event, 'preview2')">
                            <div class="mt-2">
                                <img id="preview2" src="" alt="Preview Gambar Kedua" class="img-fluid rounded d-none" style="max-height:200px;">
                            </div>
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

