<x-client-layout>
<x-slot:title>Profile Pengguna - DiaryProject_ia</x-slot:title>

    @if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var updateProfileModal = new bootstrap.Modal(document.getElementById('updateProfileModal'));
            updateProfileModal.show();
        });
    </script>
    @endif

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Profile Saya</h1>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="{{ route('page.hero') }}">Home</a></li>
            <li class="current">Profile Saya</li>
            </ol>
        </nav>
        </div>
    </div>

    <section id="agent-profile" class="agent-profile section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center mb-5">
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="150">
            <div class="agent-photo-wrapper">
              <img src="{{ asset('assets/img/real-estate/agent-3.webp') }}" alt="Agent Profile" class="img-fluid agent-photo">
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
            <div class="agent-info">
              <h1 class="agent-name">{{ $dataUser->nama_lengkap }}</h1>
              <div class="hero-actions">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <i class="bi bi-pencil"></i> Edit Profil
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-4 mb-4">
            <div class="sidebar-info">
              <div class="contact-card">
                <h4>Kontak saya</h4>

                <div class="contact-details">
                  <div class="contact-detail">
                    <i class="bi bi-whatsapp"></i>
                    <div>
                      <strong>No whatsapp</strong>
                      <p>{{ $dataUser->kontak ?? 'Data Belum di Update' }}</p>
                    </div>
                  </div>
                  <div class="contact-detail">
                    <i class="bi bi-envelope"></i>
                    <div>
                      <strong>Email</strong>
                      <p>{{ $dataUser->email }}</p>
                    </div>
                  </div>
                  <div class="contact-detail">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <strong>Alamat Lengkap</strong>
                      <p>{{ $dataUser->alamat ?? 'Data Belum di Update' }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="bio-content">
              <h3>Tentang Saya</h3>
              <p>{{ $dataUser->about_me ?? 'Data Belum di Update' }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('client.profile.update', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data" id="editProfileForm">
                @csrf
                @method('POST')

                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', Auth::user()->nama_lengkap) }}" required>
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password (Opsional)</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak diubah">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Profil</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if(Auth::user()->image)
                            <small class="d-block mt-1">Foto saat ini:</small>
                            <img src="{{ asset('aset/upload/' . Auth::user()->image) }}" class="img-thumbnail mt-2" width="100">
                        @endif
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kontak" class="form-label">Nomor Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" value="{{ old('kontak', Auth::user()->kontak) }}" required>
                        @error('kontak')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', Auth::user()->alamat) }}" required>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="about_me" class="form-label">Tentang Saya</label>
                        <textarea name="about_me" id="about_me" class="form-control" rows="3" required>{{ old('about_me', Auth::user()->about_me) }}</textarea>
                        @error('about_me')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-client-layout>
