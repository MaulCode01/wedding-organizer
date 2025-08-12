<x-client-layout>
<x-slot:title>Wedding Organizer - Home page</x-slot:title>

<main class="main">
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



    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="hero-wrapper">
          <div class="row g-4">
            <div class="col-lg-7">
              <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="content-header">
                  <span class="hero-label">
                    <i class="bi bi-house-heart field-icon"></i>
                    {{ $heroClient->label }}
                  </span>
                  <h1>{{ $heroClient->title }}</h1>
                  <p>{{ $heroClient->SubTitle }}</p>
                </div>

                <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                  <div class="search-header">
                    <h3>Masih Bingung Memilih Paket? Yuk Konsultasi Dulu!</h3>
                    <p>Jangan khawatir, tim kami siap membantu Anda memilih paket yang sesuai dengan kebutuhan dan budget. Tim Kami akan menghubungi Anda melalui WhatsApp untuk panduan lebih lanjut.</p>
                </div>

                  <form action="{{ route('konsultant.send') }}" method="POST" class="property-search-form">
                    @csrf
                    <div class="search-grid">
                        <div class="search-field">
                            <label for="nama_lengkap" class="field-label">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" class="@error('nama_lengkap') is-invalid @enderror"
                                value="{{ old('nama_lengkap') }}" required>
                            <i class="bi bi-person field-icon"></i>
                            @error('nama_lengkap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="search-field">
                            <label for="kontak" class="field-label">Nomor Whats App/Text</label>
                            <input type="text" id="kontak" name="kontak" placeholder="Contoh : 6287788326561" required>
                            <i class="bi bi-telephone field-icon"></i>
                            @error('kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="search-field">
                            <label for="alamat" class="field-label">Alamat Lengkap</label>
                            <input type="text" id="alamat" name="alamat_lengkap" placeholder="Masukan Alamat Lengkap" class="@error('alamat_lengkap') is-invalid @enderror" value="{{ old('alamat_lengkap') }}" required>
                            <i class="bi bi-geo-alt field-icon"></i>
                            @error('alamat_lengkap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="search-field">
                            <label for="catatan" class="field-label">Ada yang ingin ditanyakan?</label>
                            <input type="text" id="catatan" name="catatan" placeholder="Silahkan masukan Pertanyaan" class="@error('catatan') is-invalid @enderror" value="{{ old('catatan') }}">
                            <i class="bi bi-book field-icon"></i>
                            @error('catatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="search-btn" onclick="this.form.submit()">
                        <i class="bi bi-bookmark"></i>
                        <span>Konsultasi Sekarang</span>
                    </button>
                </form>

            </div>
            </div>
        </div>

            <div class="col-lg-5">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="visual-container">
                  <div class="featured-property">
                    @if ($heroClient->image_1)
                        <img src="{{ asset('Heroimg/' . $heroClient->image_1) }}" alt="Featured Property" class="img-fluid">
                    @else
                        <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Featured Property" class="img-fluid">
                    @endif
                    <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Featured Property" class="img-fluid">
                    <div class="property-info">
                      <div class="property-details">
                        <span><i class="bi bi-geo-alt"></i>{{ $aboutClient->alamat }}</span>
                      </div>
                    </div>
                  </div>

                  <div class="overlay-images">
                    <div class="overlay-img overlay-1">
                    @if ($heroClient->image_2)
                        <img src="{{ asset('Heroimg/' . $heroClient->image_2) }}" alt="Interior View" class="img-fluid">
                    @else
                        <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Interior View" class="img-fluid">
                    @endif
                    </div>
                    <div class="overlay-img overlay-2">
                    @if ($heroClient->image_3)
                        <img src="{{ asset('Heroimg/' . $heroClient->image_3) }}" alt="Exterior View" class="img-fluid">
                    @else
                        <img src="{{ asset('aset/image/wedding-1.jpg') }}" alt="Exterior View" class="img-fluid">
                    @endif
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Hero Visual -->
          </div>
        </div>
      </div>

    </section>

    <section id="featured-packages" class="featured-properties section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Paket Favorit Kami</h2>
            <p>Pilihan paket wedding terbaik untuk mewujudkan hari istimewa Anda</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">

            <!-- Featured Package Besar -->
            <div class="col-lg-8">
                <div class="featured-property-main" data-aos="zoom-in" data-aos-delay="200">
                <div class="property-hero">
                    <img src="{{ asset('aset/image/wedding-6.jpg') }}" alt="Paket Premium Wedding" class="img-fluid">
                    <div class="property-overlay">
                    <div class="property-badge-main premium">Paket Premium</div>
                    <div class="property-stats">
                        <div class="stat-item">
                        <i class="bi bi-flower1"></i>
                        <span>Dekorasi Lengkap</span>
                        </div>
                        <div class="stat-item">
                        <i class="bi bi-camera"></i>
                        <span>Dokumentasi Full</span>
                        </div>
                        <div class="stat-item">
                        <i class="bi bi-people"></i>
                        <span>500 Undangan</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="property-hero-content">
                    <div class="property-header">
                    <div class="property-info">
                        <h2>Wedding Premium Outdoor</h2>
                        <div class="property-address">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Jakarta & Sekitarnya</span>
                        </div>
                    </div>
                    <div class="property-price-main">Rp 75.000.000</div>
                    </div>
                    <p class="property-description">
                    Paket lengkap dengan dekorasi mewah, MUA profesional, dokumentasi video & foto, serta catering untuk 500 undangan.
                    </p>
                    <div class="property-actions-main">
                    <div class="property-listing-info">
                        <span class="listing-status for-sale">Best Seller</span>
                        <span class="listing-date">Promo Bulan Ini</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Featured -->

            <!-- Sidebar Paket -->
            <div class="col-lg-4">
                <div class="properties-sidebar">

                <!-- Paket Intimate -->
                <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="300">
                    <div class="sidebar-property-image">
                    <img src="{{ asset('aset/image/wedding-4.jpg') }}" alt="Paket Intimate Wedding" class="img-fluid">
                    <div class="sidebar-property-badge hot">Favorit</div>
                    </div>
                    <div class="sidebar-property-content">
                    <h4>Paket Intimate Wedding</h4>
                    <div class="sidebar-location">
                        <i class="bi bi-heart"></i>
                        <span>Private Venue</span>
                    </div>
                    <div class="sidebar-specs">
                        <span><i class="bi bi-people"></i> 100 Tamu</span>
                        <span><i class="bi bi-music-note-beamed"></i> Live Music</span>
                    </div>
                    <div class="sidebar-price-row">
                        <div class="sidebar-price">Rp 35.000.000</div>
                    </div>
                    </div>
                </div>

                <!-- Paket Prewedding -->
                <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="400">
                    <div class="sidebar-property-image">
                    <img src="{{ asset('aset/image/wedding-5.jpg') }}" alt="Paket Prewedding" class="img-fluid">
                    <div class="sidebar-property-badge new">Baru</div>
                    </div>
                    <div class="sidebar-property-content">
                    <h4>Paket Prewedding Eksklusif</h4>
                    <div class="sidebar-location">
                        <i class="bi bi-camera"></i>
                        <span>Indoor & Outdoor</span>
                    </div>
                    <div class="sidebar-specs">
                        <span><i class="bi bi-clock"></i> 6 Jam</span>
                        <span><i class="bi bi-image"></i> 200 Foto</span>
                    </div>
                    <div class="sidebar-price-row">
                        <div class="sidebar-price">Rp 15.000.000</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
</section>


    {{-- <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-grid">

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-f-5.webp" class="img-fluid" alt="Testimonial 1">
                </div>
                <div class="testimonial-meta">
                  <h3>Sophia Martinez</h3>
                  <h4>Creative Director</h4>
                  <div class="company-logo">
                    <i class="bi bi-building"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Leveraging cutting-edge design principles to create immersive brand experiences that resonate with modern audiences.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-m-5.webp" class="img-fluid" alt="Testimonial 2">
                </div>
                <div class="testimonial-meta">
                  <h3>Alexander Wright</h3>
                  <h4>CEO &amp; Founder</h4>
                  <div class="company-logo">
                    <i class="bi bi-buildings"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Revolutionary solutions have transformed our business landscape, driving unprecedented growth and market leadership position.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-f-6.webp" class="img-fluid" alt="Testimonial 3">
                </div>
                <div class="testimonial-meta">
                  <h3>Isabella Kim</h3>
                  <h4>Product Strategist</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-check"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Strategic implementation of innovative technologies has elevated our product development and market penetration.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="Testimonial 4">
                </div>
                <div class="testimonial-meta">
                  <h3>James Cooper</h3>
                  <h4>Tech Lead</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-gear"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Exceptional technical expertise and innovative solutions have streamlined our development processes significantly.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> --}}

<section id="why-us" class="why-us section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kenapa Memilih Kami?</h2>
        <p>Kami hadir untuk menjadikan hari bahagia Anda lebih berkesan, indah, dan tak terlupakan.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

        <!-- Left Content -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
            <h3>Wujudkan Pernikahan Impian Anda Bersama Kami</h3>
            <p>Kami berpengalaman mengatur berbagai konsep pernikahan mulai dari intimate wedding hingga resepsi mewah. Dengan tim profesional dan vendor terpercaya, setiap detail acara akan dirancang dengan sempurna.</p>

            <div class="features-list">
                <div class="feature-item d-flex align-items-center mb-3">
                <div class="icon-wrapper me-3">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <div>
                    <h5>Konsep Eksklusif & Personal</h5>
                    <p>Setiap pernikahan dirancang sesuai kepribadian dan cerita cinta Anda.</p>
                </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                <div class="icon-wrapper me-3">
                    <i class="bi bi-emoji-smile"></i>
                </div>
                <div>
                    <h5>Tim Profesional & Ramah</h5>
                    <p>Didukung oleh MUA, fotografer, dan dekorator berpengalaman di bidangnya.</p>
                </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                <div class="icon-wrapper me-3">
                    <i class="bi bi-music-note-beamed"></i>
                </div>
                <div>
                    <h5>Layanan Lengkap</h5>
                    <p>Dari dekorasi, catering, dokumentasi, hingga hiburan dalam satu paket.</p>
                </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                <div class="icon-wrapper me-3">
                    <i class="bi bi-star-fill"></i>
                </div>
                <div>
                    <h5>Ratusan Klien Bahagia</h5>
                    <p>Lebih dari 500 pasangan telah mempercayakan hari spesialnya kepada kami.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Left Content -->

        <!-- Right Stats -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="stats-section">
            <div class="row gy-4">
                <div class="col-md-6">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                    <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Pernikahan Berhasil</div>
                    <p>Dari intimate hingga resepsi besar, semua berjalan lancar & berkesan.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                    <i class="bi bi-star"></i>
                    </div>
                    <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2" class="purecounter"></span>%
                    </div>
                    <div class="stat-label">Kepuasan Klien</div>
                    <p>Mayoritas pasangan menilai layanan kami melebihi ekspektasi.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                    <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Tahun Pengalaman</div>
                    <p>Kami telah dipercaya lebih dari satu dekade di industri wedding organizer.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                    <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Penghargaan</div>
                    <p>Diakui sebagai salah satu WO terbaik dengan standar layanan premium.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Right Stats -->

        </div>
    </div>
</section>


  </main>

  <div id="preloader"></div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</x-client-layout>
