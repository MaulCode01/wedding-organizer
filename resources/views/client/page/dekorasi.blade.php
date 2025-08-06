<x-client-layout>
<x-slot:title>Dekorasi - Wedding Organizer</x-slot:title>

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

<section id="dekorasi" class="properties section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Paket Dekorasi Pernikahan</h2>
    <p>Buat momen istimewa Anda lebih berkesan dengan dekorasi elegan dan penuh makna</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="properties-container">
      <div class="properties-masonry view-masonry active" data-aos="fade-up" data-aos-delay="250">
        <div class="row g-4">

          <!-- Paket Basic -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-1.jpg') }}" alt="Dekorasi Basic" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 10.000.000</div>
                </div>
                <h4 class="property-title">Paket Dekorasi Basic</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-flower1"></i>
                    <span>Backdrop Sederhana</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-brightness-high"></i>
                    <span>Penerangan Standard</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-balloon-heart"></i>
                    <span>Meja Akad & Karpet</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Paket Elegant -->
          <div class="col-lg-4 col-md-6">
            <div class="property-item">
              <a href="{{ route('detail.produk') }}" class="property-link">
                <div class="property-image-wrapper">
                  <img src="{{ asset('aset/image/wedding-4.jpg') }}" alt="Dekorasi Elegant" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 18.000.000</div>
                </div>
                <h4 class="property-title">Paket Dekorasi Elegant</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-flower3"></i>
                    <span>Bunga Segar & Ornamen</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-columns-gap"></i>
                    <span>Pelaminan Modern</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-lightbulb"></i>
                    <span>Penerangan Artistik</span>
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
                  <img src="{{ asset('aset/image/wedding-6.jpg') }}" alt="Dekorasi Premium" class="img-fluid">
                </div>
              </a>
              <div class="property-details">
                <div class="property-header">
                  <div class="property-price">Rp 30.000.000</div>
                </div>
                <h4 class="property-title">Paket Dekorasi Premium</h4>
                <div class="property-specs">
                  <div class="spec-item">
                    <i class="bi bi-stars"></i>
                    <span>Pelaminan Megah Custom</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-tree"></i>
                    <span>Bunga & Ornamen Eksklusif</span>
                  </div>
                  <div class="spec-item">
                    <i class="bi bi-lightning-charge"></i>
                    <span>Penerangan & Efek Khusus</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


</x-client-layout>
