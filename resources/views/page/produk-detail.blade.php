<x-client-layout>
<x-slot:title></x-slot:title>

<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Property Details</h1>
    <nav class="breadcrumbs">
        <ol>
        <li><a href="{{ route('page.hero') }}">Home</a></li>
        <li class="current">Product Detail</li>
        </ol>
    </nav>
    </div>
</div>

<section id="property-details" class="property-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-7">
            <div class="property-hero mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-image-container">
                <div class="property-gallery-slider swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                      },
                      "thumbs": {
                        "swiper": ".property-thumbnails-slider"
                      }
                    }
                  </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset(!empty($dataProduct->image_package) ? 'aset/upload/' . $dataProduct->image_package : 'aset/image/wedding-2.jpg') }}" class="img-fluid hero-image" alt="Property Main Image">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Property Hero -->

            <!-- Property Information -->
            <div class="property-info mb-5" data-aos="fade-up" data-aos-delay="300">
              <div class="property-header">
                <h1 class="property-title">{{ $dataProduct->nama_paket }}</h1>
              </div>

              <div class="pricing-section">
                <div class="price-breakdown">
                  <span class="available">Untuk Harga mulai dari</span>
                </div>
                <div class="main-price">Rp {{ number_format($dataProduct->harga, '0', ',', '.')  }}</div>
              </div>
            </div>

            <!-- Description & Features -->
            <div class="property-details mb-5" data-aos="fade-up" data-aos-delay="400">
              <h3>Deskripsi Paket</h3>
              <p>{{ $dataProduct->description_content }}</p>
              <div class="features-grid mt-4">
                <div class="row">
                  <div class="col-md-6">
                    <h5>Fitur Utama</h5>
                    <ul class="feature-list">
                      @if(!empty($dataProduct->fitur_1) && is_array($dataProduct->fitur_1))
                        @foreach($dataProduct->fitur_1 as $fitur)
                            <li><i class="bi bi-check2"></i> {{ $fitur }}</li>
                        @endforeach
                        @else
                            <li><em>Tidak ada fitur</em></li>
                        @endif
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5>Fitur Tambahan</h5>
                    <ul class="feature-list">
                        @if(!empty($dataProduct->fitur_2) && is_array($dataProduct->fitur_2))
                            @foreach($dataProduct->fitur_2 as $fitur)
                                <li><i class="bi bi-check2"></i> {{ $fitur }}</li>
                            @endforeach
                        @else
                            <li><em>Tidak ada fitur</em></li>
                        @endif
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Sidebar -->
           <div class="col-lg-5">
                <div class="sticky-sidebar">
                    <div class="card shadow-lg border-0 mb-4" data-aos="fade-up" data-aos-delay="250">
                        <div class="card-body text-center">

                            <!-- Judul Paket -->
                            <h5 class="card-title fw-bold">{{ $dataProduct->nama_paket }}</h5>

                            <!-- Harga -->
                            <p class="fs-4 text-success fw-bold mb-4">
                                Rp {{ number_format($dataProduct->harga, 0, ',', '.') }}
                            </p>
                            <button class="btn btn-success btn-lg w-100 py-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <i class="bi bi-calendar-check me-2"></i> Booking Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="#">
            @csrf
            <input type="hidden" name="package_id" value="{{ $dataProduct->id }}">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Booking {{ $dataProduct->nama_paket }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-success">
                        <strong>{{ $dataProduct->nama_paket }}</strong><br>
                        Harga: Rp {{ number_format($dataProduct->harga, 0, ',', '.') }}
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
                        <input type="text" id="tanggal_acara" name="tanggal_acara" class="form-control" placeholder="Pilih tanggal acara" required>
                    </div>

                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea id="catatan" name="catatan" class="form-control" rows="3" placeholder="Tambahkan catatan (opsional)"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success w-100">Booking Sekarang</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById('bookingModal');
            let fp = null;
            const bookedDates = @json($bookedDates ?? []);

            modal.addEventListener('shown.bs.modal', function () {
                if (fp) fp.destroy();
                fp = flatpickr("#tanggal_acara", {
                    dateFormat: "Y-m-d",
                    disable: bookedDates,
                    minDate: "today",
                    locale: "id"
                });
            });

            modal.addEventListener('hidden.bs.modal', function () {
                if (fp) {
                    fp.destroy();
                    fp = null;
                }
            });
        });
    </script>

</x-client-layout>
