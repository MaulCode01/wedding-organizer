<x-auth-layout>
<x-slot:title>Register - Wedding Organizer</x-slot:title>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Silahkan Buat Akun baru</h5>
                  </div>

                  <form action="{{ route('auth.register.create') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="username" class="form-label">Nama Lengkap</label>
                      <div class="input-group has-validation">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap" id="username" required>
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email" required>
                      @error('email')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Masukan password" id="password" required>
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="kontak" class="form-label">Kontak</label>
                      <input type="text" name="kontak" class="form-control" placeholder="Masukan Kontak aktif mis: 62878761563" id="kontak" required>
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="alamat" class="form-label">Alamat Lengkap</label>
                      <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Rumah Anda" id="alamat" required>
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100" type="submit">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="{{ route('auth.show.login') }}">Silahkan Sign in</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
</x-auth-layout>
