<x-admin-layout>
<x-slot:title>Hero Client - DiaryProject_ia</x-slot:title>

<div class="container mt-4">
    <div class="card shadow-sm bg-white">
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
        <div class="card-body">
            <h5 class="card-title mb-4">Input Konten Halaman Client</h5>
            <form action="{{ route('hero.update',  $hero->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $hero->title) }}" placeholder="Masukkan judul konten">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-semibold">Subjudul</label>
                            <textarea class="form-control" id="subtitle" name="subTitle" required>{{ old('SubTitle', $hero->SubTitle) }}</textarea>
                            @error('subTitle')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="label" class="form-label fw-semibold">Label</label>
                            <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $hero->label ) }}" placeholder="Masukkan label tombol / call to action">
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

                        <div class="mb-3">
                            <label for="image3" class="form-label fw-semibold">Gambar Ketiga</label>
                            <input class="form-control" type="file" id="image3" name="image_3" accept="image/*" onchange="previewImage(event, 'preview3')">
                            <div class="mt-2">
                                <img id="preview3" src="" alt="Preview Gambar Ketiga" class="img-fluid rounded d-none" style="max-height:200px;">
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

