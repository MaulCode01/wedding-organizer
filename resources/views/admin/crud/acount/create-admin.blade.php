<x-admin-layout>
<x-slot:title>Buat Akun Admin</x-slot:title>
<div class="card-body">
    <h5 class="card-title mb-4">Buat Akun Admin</h5>
    <form action="{{ route('create.acount.admin') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan email">
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
                <i class="bi bi-person-plus"></i> Buat Akun Admin
            </button>
        </div>
    </form>
</div>


</x-admin-layout>
