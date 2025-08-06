<x-client-layout>
<x-slot:title>MUA - Wedding Organizer</x-slot:title>

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


<!-- Section Paket Wedding Organizer -->
<section id="mua-busana" class="properties section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Paket MUA & Busana</h2>
    <p>Tampil sempurna di hari bahagia Anda dengan riasan profesional dan busana pengantin terbaik</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="properties-container">
      <div class="properties-masonry view-masonry active" data-aos="fade-up" data-aos-delay="250">
        <div class="row g-4">

          <!-- Paket Rias & Busana Basic -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-1.jpg') }}" alt="Paket MUA Basic" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 5.000.000</div>
                </div>
                <h4 class="property-title">Paket Basic</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-brush"></i>
                    <span>Make Up Pengantin (1x)</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Busana 1 Pasang</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-heart"></i>
                    <span>Hairdo & Aksesoris</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Paket Rias & Busana Elegant -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-5.jpg') }}" alt="Paket MUA Elegant" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 8.500.000</div>
                </div>
                <h4 class="property-title">Paket Elegant</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-palette"></i>
                    <span>2x Make Up Pengantin</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-person-hearts"></i>
                    <span>Busana 2 Pasang (Akad & Resepsi)</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-flower1"></i>
                    <span>Bouquet & Aksesoris Lengkap</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Paket Rias & Busana Premium -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-6.jpg') }}" alt="Paket MUA Premium" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 15.000.000</div>
                </div>
                <h4 class="property-title">Paket Premium</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-stars"></i>
                    <span>Full Make Up Seharian</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-gem"></i>
                    <span>Busana Eksklusif Custom</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-flower2"></i>
                    <span>Aksesoris & Perhiasan Premium</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Paket Eksklusif (Tampilan List) -->
      <div class="properties-rows view-rows">
        <div class="row g-4">
          <div class="col-12">
            <div class="property-row-item">
              <a href="{{ route('detail.produk') }}" class="property-row-link">
                <div class="row align-items-center">
                  <div class="col-lg-4">
                    <div class="property-image-wrapper">
                      <img src="{{ asset('aset/image/mua-luxury.jpg') }}" alt="Paket Luxury MUA & Busana" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="property-row-content">
                      <div class="property-header">
                        <h4 class="property-title">Luxury MUA & Busana</h4>
                        <div class="property-type-price">
                          <span class="property-type">Full Service</span>
                          <span class="property-price">Rp 25.000.000</span>
                        </div>
                      </div>
                      <p class="property-address">
                        <i class="bi bi-gift"></i>
                        Include Busana Pengantin, MUA Seharian, dan Rias Keluarga
                      </p>
                      <div class="property-specs">
                        <span><i class="bi bi-gem"></i> Busana 3 Pasang Custom</span>
                        <span><i class="bi bi-brush"></i> Make Up + Hairdo 2x</span>
                        <span><i class="bi bi-flower3"></i> Dekorasi Headpiece Eksklusif</span>
                      </div>
                      <div class="property-agent">
                        <img src="{{ asset('aset/image/team-mua.jpg') }}" alt="MUA Team" class="agent-avatar">
                        <span>Tim MUA & Desainer Profesional</span>
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
