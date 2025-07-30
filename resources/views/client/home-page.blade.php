<x-client-layout>
<x-slot:title>Wedding Organizer - Home page</x-slot:title>
<main class="main">

    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="hero-wrapper">
          <div class="row g-4">
            <div class="col-lg-7">
              <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="content-header">
                  <span class="hero-label">
                    <i class="bi bi-house-heart field-icon"></i>
                    Nikah Gak Harus Ribet
                  </span>
                  <h1>Buat Momen Sakralmu Lebih Istimewa</h1>
                  <p>Dari konsep sampai hari H, biar kami yang atur. Kamu tinggal bilang ‘SAH’</p>
                </div>

                <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                  <div class="search-header">
                    <h3>Mau Pesan Paket Tanpa Ribet?</h3>
                    <p>Anda bisa melakukan booking tanpa harus login. Cukup pilih paket yang diinginkan dan isi data pemesan, tim kami akan segera menghubungi Anda!</p>
                  </div>

                  <form action="" class="property-search-form">
                    <div class="search-grid">
                    <div class="search-field">
                        <label for="search-location" class="field-label">Nama Lengkap</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-person field-icon"></i>
                    </div>
                    <div class="search-field">
                        <label for="search-location" class="field-label">Nomor Whats App/Text</label>
                        <input type="number" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-telephone field-icon"></i>
                      </div>
                      <div class="search-field">
                        <label for="search-location" class="field-label">Lokasi Acara</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>
                      <div class="search-field">
                        <label for="search-location" class="field-label">Tanggal Acara</label>
                        <input type="date" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-calendar field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-type" class="field-label">Pilih</label>
                        <select id="search-type" name="property_type" required="">
                          <option value="">Kategori Paket</option>
                          <option value="house">Wedding</option>
                          <option value="apartment">Prewed</option>
                          <option value="condo">Dekorasi</option>
                          <option value="villa">Dokumentasi</option>
                          <option value="commercial">Mua & Busana</option>
                        </select>
                        <i class="bi bi-building field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-location" class="field-label">Detail Kebutuhan</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>
                    </div>

                    <button type="submit" class="search-btn">
                      <i class="bi bi-bookmark"></i>
                      <span>Booking Sekarang</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <!-- End Hero Content -->

            <div class="col-lg-5">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="visual-container">
                  <div class="featured-property">
                    <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Featured Property" class="img-fluid">
                    <div class="property-info">
                      <div class="property-details">
                        <span><i class="bi bi-geo-alt"></i> Padang Birau Rt.12 jl lubuk linggau km 3 kabupaten kelurahan gunung kembang kabupaten sarolangun provinsi jambi</span>
                      </div>
                    </div>
                  </div>

                  <div class="overlay-images">
                    <div class="overlay-img overlay-1">
                      <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Interior View" class="img-fluid">
                    </div>
                    <div class="overlay-img overlay-2">
                      <img src="{{ asset('aset/image/wedding-1.jpg') }}" alt="Exterior View" class="img-fluid">
                    </div>
                  </div>

                  <div class="agent-card">
                    <div class="agent-profile">
                      <img src="assets/img/real-estate/agent-7.webp" alt="Agent Profile" class="agent-photo">
                      <div class="agent-info">
                        <h4>Michael Chen</h4>
                        <p>Senior Property Advisor</p>
                        <div class="agent-rating">
                          <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                          </div>
                          <span class="rating-text">5.0 (94 reviews)</span>
                        </div>
                      </div>
                    </div>
                    <button class="contact-agent-btn">
                      <i class="bi bi-whatsapp"></i>
                    </button>
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
                        <h2><a href="paket-premium.html">Wedding Premium Outdoor</a></h2>
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
                    <a href="paket-premium.html" class="btn-primary-custom">Pesan Sekarang</a>
                    <a href="paket-premium.html" class="btn-outline-custom">Lihat Detail</a>
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
                    <h4><a href="paket-intimate.html">Paket Intimate Wedding</a></h4>
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
                        <a href="paket-intimate.html" class="sidebar-btn">Lihat</a>
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
                    <h4><a href="paket-prewedding.html">Paket Prewedding Eksklusif</a></h4>
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
                        <a href="paket-prewedding.html" class="sidebar-btn">Lihat</a>
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

          <div class="cta-buttons mt-4">
            <a href="#paket" class="btn btn-primary me-3">Lihat Paket Kami</a>
            <a href="#contact" class="btn btn-outline-primary">Konsultasi Gratis</a>
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

</x-client-layout>
