<x-client-layout>
<x-slot:title>Prewed - Wedding Organizer</x-slot:title>

<section id="home-about" class="home-about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">

            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="image-gallery">
                    <div class="primary-image">
                        @if(!empty($content->image_konten) && file_exists(public_path('storage/'.$content->image_konten)))
                            <img src="{{ asset('storage/'.$content->image_konten) }}" alt="{{ $content->judul_konten }}" class="img-fluid">
                        @else
                            <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Default Image" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="content">
                    <div class="section-header">
                        <span class="section-label">kategori {{ $content->kategori ?? 'Tidak Tersedia' }}</span>
                        <h2>{{ $content->judul_konten ?? 'Judul Konten Tidak Tersedia' }}</h2>
                    </div>

                    <p>
                        {{ $content->deskripsi_konten ?? 'Deskripsi belum tersedia.' }}
                    </p>

                    @if(!empty($content->fitur) && is_array($content->fitur))
                        <ul class="list-unstyled mt-3">
                            @foreach($content->fitur as $fitur)
                                <li><i class="bi bi-check-circle text-success me-2"></i>{{ $fitur }}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>


<section id="prewedding" class="properties section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Paket Prewedding</h2>
    <p>Abadikan momen indah sebelum pernikahan Anda dengan konsep prewedding terbaik</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="properties-container">
      <div class="properties-masonry view-masonry active" data-aos="fade-up" data-aos-delay="250">
        <div class="row g-4">

          <!-- Paket Outdoor -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Paket Outdoor Prewedding" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 7.500.000</div>
                </div>
                <h4 class="property-title">Outdoor Prewedding</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-camera"></i>
                    <span>30 Foto Editing</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-film"></i>
                    <span>Video Highlight 3 Menit</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-tree"></i>
                    <span>Lokasi Outdoor (Taman / Pantai)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Paket Indoor -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-5.jpg') }}" alt="Paket Indoor Prewedding" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 10.000.000</div>
                </div>
                <h4 class="property-title">Indoor Prewedding</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-camera-reels"></i>
                    <span>2 Kostum & Properti</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-lightbulb"></i>
                    <span>Studio Eksklusif</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-brush"></i>
                    <span>Make Up & Hairdo</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Paket Premium -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-7.jpg') }}" alt="Paket Premium Prewedding" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 18.000.000</div>
                </div>
                <h4 class="property-title">Premium Prewedding</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-airplane"></i>
                    <span>Lokasi Luar Kota</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-collection-play"></i>
                    <span>Cinematic Video</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-gift"></i>
                    <span>Album Eksklusif + Frame</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Bagian View List -->
      <div class="properties-rows view-rows">
        <div class="row g-4">
          <div class="col-12">
            <div class="property-row-item">
              <a href="{{ route('detail.produk') }}" class="property-row-link">
                <div class="row align-items-center">
                  <div class="col-lg-4">
                    <div class="property-image-wrapper">
                      <img src="{{ asset('aset/image/prewed-luxury.jpg') }}" alt="Luxury Prewedding Package" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="property-row-content">
                      <div class="property-header">
                        <h4 class="property-title">Luxury Prewedding</h4>
                        <div class="property-type-price">
                          <span class="property-type">Full Service</span>
                          <span class="property-price">Rp 30.000.000</span>
                        </div>
                      </div>
                      <p class="property-address">
                        <i class="bi bi-geo-alt"></i>
                        Bali / Jogja / Destinasi Pilihan
                      </p>
                      <div class="property-specs">
                        <span><i class="bi bi-camera-fill"></i> 50 Foto Editing</span>
                        <span><i class="bi bi-film"></i> Cinematic Drone Video</span>
                        <span><i class="bi bi-stars"></i> Custom Styling & Kostum</span>
                      </div>
                      <div class="property-agent">
                        <img src="{{ asset('aset/image/team-prewed.jpg') }}" alt="Prewedding Team" class="agent-avatar">
                        <span>Team Fotografer & Videografer Profesional</span>
                      </div>
                      <span class="btn btn-primary view-details-btn mt-3">Lihat Detail</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



</x-client-layout>
