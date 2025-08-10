<x-admin-layout>
<x-slot:title>Edit Akun Admin</x-slot:title>

<div class="card-body">
    <h5 class="card-title mb-4">Edit Akun Admin</h5>
    <form action="{{ route('edit.acount', $dataAdmin->id ) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $dataAdmin->nama_lengkap ) }}">
                    @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $dataAdmin->email ) }}" readonly>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-person-plus"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>

</x-admin-layout>
