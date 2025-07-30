<x-client-layout>
<x-slot:title>Tentang Kami - Wedding Organizer</x-slot:title>

<main class="main">
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('page.hero') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="hero-content text-center" data-aos="zoom-in" data-aos-delay="200">
                <h2>Mewujudkan Pernikahan Impian Sejak 2012</h2>
                <p class="hero-description">Kami adalah tim Wedding Organizer profesional yang telah dipercaya ratusan pasangan untuk merancang hari bahagia mereka. Setiap detail acara kami wujudkan dengan cinta, kreativitas, dan dedikasi agar momen Anda menjadi kenangan terindah seumur hidup.
                </p>
            </div>
            <div class="dual-image-layout" data-aos="fade-up" data-aos-delay="300">
              <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                  <div class="primary-image-wrap">
                    <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Luxury Property" class="img-fluid">
                    <div class="floating-badge" data-aos="zoom-in" data-aos-delay="400">
                      <div class="badge-content">
                        <i class="bi bi-award"></i>
                        <span>Wedding Organizer Terbaik</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="secondary-image-wrap">
                    <img src="{{ asset('aset/image/wedding-4.jpg') }}" alt="Professional Agent" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-showcase" data-aos="fade-up" data-aos-delay="350">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box" data-aos="flip-up" data-aos-delay="400">
                        <div class="feature-icon">
                        <i class="bi bi-flower1"></i>
                        </div>
                        <div class="feature-content">
                        <h4>Dekorasi Elegan</h4>
                        <p>Dari konsep rustic hingga glamor, dekorasi dirancang sesuai tema impian Anda.</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                    <div class="feature-box" data-aos="flip-up" data-aos-delay="450">
                        <div class="feature-icon">
                        <i class="bi bi-camera-fill"></i>
                        </div>
                        <div class="feature-content">
                        <h4>Dokumentasi Profesional</h4>
                        <p>Fotografer & videografer berpengalaman untuk mengabadikan momen penuh cinta.</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                    <div class="feature-box" data-aos="flip-up" data-aos-delay="500">
                        <div class="feature-icon">
                        <i class="bi bi-music-note-beamed"></i>
                        </div>
                        <div class="feature-content">
                        <h4>Entertainment Lengkap</h4>
                        <p>Musik, MC, dan hiburan yang membuat acara semakin hidup & berkesan.</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                    <div class="feature-box" data-aos="flip-up" data-aos-delay="550">
                        <div class="feature-icon">
                        <i class="bi bi-heart-fill"></i>
                        </div>
                        <div class="feature-content">
                        <h4>Manajemen Penuh Cinta</h4>
                        <p>Kami mengurus semua detail agar Anda bisa menikmati hari bahagia tanpa rasa khawatir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section><!-- /About Section -->
  </main>
</x-client-layout>
