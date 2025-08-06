<x-client-layout>
<x-slot:title>Dokumentasi - Wedding Organizer</x-slot:title>

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

<section id="dokumentasi" class="properties section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Dokumentasi Paket Wedding</h2>
    <p>Abadikan setiap momen berharga dari awal hingga akhir pernikahan Anda</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4">

      <!-- Dokumentasi Akad -->
      <div class="col-lg-4 col-md-6">
        <div class="property-item">
          <div class="property-image-wrapper">
            <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Dokumentasi Akad" class="img-fluid">
          </div>
          <div class="property-details">
            <div class="property-header">
              <h4 class="property-title">Dokumentasi Akad Nikah</h4>
            </div>
            <p class="property-description">
              Mengabadikan momen sakral akad nikah dengan foto dan video profesional.
            </p>
            <a href="{{ route('detail.produk') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Dokumentasi Resepsi -->
      <div class="col-lg-4 col-md-6">
        <div class="property-item">
          <div class="property-image-wrapper">
            <img src="{{ asset('aset/image/wedding-5.jpg') }}" alt="Dokumentasi Resepsi" class="img-fluid">
          </div>
          <div class="property-details">
            <div class="property-header">
              <h4 class="property-title">Dokumentasi Resepsi</h4>
            </div>
            <p class="property-description">
              Mengabadikan kebahagiaan bersama keluarga dan tamu di hari pernikahan.
            </p>
            <a href="{{ route('detail.produk') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Dokumentasi Prewedding -->
      <div class="col-lg-4 col-md-6">
        <div class="property-item">
          <div class="property-image-wrapper">
            <img src="{{ asset('aset/image/wedding-7.jpg') }}" alt="Dokumentasi Prewedding" class="img-fluid">
          </div>
          <div class="property-details">
            <div class="property-header">
              <h4 class="property-title">Dokumentasi Prewedding</h4>
            </div>
            <p class="property-description">
              Sesi foto prewedding romantis dengan konsep sesuai pilihan Anda.
            </p>
            <a href="{{ route('detail.produk') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</x-client-layout>
