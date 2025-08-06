<x-client-layout>
<x-slot:title></x-slot:title>

<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Property Details</h1>
    <nav class="breadcrumbs">
        <ol>
        <li><a href="{{ route('page.hero') }}">Home</a></li>
        <li class="current">Property Details</li>
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
                      <img src="{{ asset('assets/img/real-estate/property-exterior-7.webp') }}" class="img-fluid hero-image" alt="Property Main Image">
                      <div class="hero-overlay">
                        <button class="virtual-tour-btn">
                          <i class="bi bi-play-circle"></i>
                          Virtual Tour
                        </button>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/real-estate/property-interior-7.webp') }}" class="img-fluid hero-image" alt="Interior View">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Property Hero -->

            <!-- Property Information -->
            <div class="property-info mb-5" data-aos="fade-up" data-aos-delay="300">
              <div class="property-header">
                <h1 class="property-title">Executive Penthouse with City Views</h1>
              </div>

              <div class="pricing-section">
                <div class="price-breakdown">
                  <span class="available">Untuk Harga mulai dari</span>
                </div>
                <div class="main-price">$4,850</div>
              </div>

              <div class="quick-stats">
                <div class="stat-grid">
                  <div class="stat-card">
                    <div class="stat-icon">
                      <i class="bi bi-house"></i>
                    </div>
                    <div class="stat-content">
                      <span class="stat-number">3</span>
                      <span class="stat-label">Bedrooms</span>
                    </div>
                  </div>
                  <div class="stat-card">
                    <div class="stat-icon">
                      <i class="bi bi-droplet"></i>
                    </div>
                    <div class="stat-content">
                      <span class="stat-number">2.5</span>
                      <span class="stat-label">Bathrooms</span>
                    </div>
                  </div>
                  <div class="stat-card">
                    <div class="stat-icon">
                      <i class="bi bi-arrows-angle-expand"></i>
                    </div>
                    <div class="stat-content">
                      <span class="stat-number">1,890</span>
                      <span class="stat-label">Sq Ft</span>
                    </div>
                  </div>
                  <div class="stat-card">
                    <div class="stat-icon">
                      <i class="bi bi-car-front"></i>
                    </div>
                    <div class="stat-content">
                      <span class="stat-number">2</span>
                      <span class="stat-label">Parking</span>
                    </div>
                  </div>
                  <div class="stat-card">
                    <div class="stat-icon">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="stat-content">
                      <span class="stat-number">15th</span>
                      <span class="stat-label">Floor</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Description & Features -->
            <div class="property-details mb-5" data-aos="fade-up" data-aos-delay="400">
              <h3>Property Description</h3>
              <p>Experience luxury living in this stunning penthouse apartment featuring panoramic city views and premium finishes throughout. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

              <div class="features-grid mt-4">
                <div class="row">
                  <div class="col-md-6">
                    <h5>Interior Features</h5>
                    <ul class="feature-list">
                      <li><i class="bi bi-check2"></i> Floor-to-ceiling windows</li>
                      <li><i class="bi bi-check2"></i> Hardwood flooring</li>
                      <li><i class="bi bi-check2"></i> Gourmet kitchen</li>
                      <li><i class="bi bi-check2"></i> In-unit washer/dryer</li>
                      <li><i class="bi bi-check2"></i> Walk-in closets</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5>Building Amenities</h5>
                    <ul class="feature-list">
                      <li><i class="bi bi-check2"></i> Rooftop terrace</li>
                      <li><i class="bi bi-check2"></i> Fitness center</li>
                      <li><i class="bi bi-check2"></i> 24/7 concierge</li>
                      <li><i class="bi bi-check2"></i> Indoor pool</li>
                      <li><i class="bi bi-check2"></i> Pet-friendly</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Sidebar -->
          <div class="col-lg-5">
            <div class="sticky-sidebar">
              <div class="actions-card mb-4" data-aos="fade-up" data-aos-delay="250">
                <div class="action-buttons">
                  <button class="btn btn-primary btn-lg w-100 mb-3">
                    <i class="bi bi-wallet"></i>
                    Beli sekarang
                  </button>
                  <div class="row g-2">
                    <div class="action-buttons">
                      <button class="btn btn-outline-primary w-100">
                        <i class="bi bi-chart"></i>
                        Masukan Keranjang
                      </button>
                    </div>
                  </div>
                </div>
              </div><!-- End Quick Actions -->

            </div>
          </div><!-- End Sidebar -->

        </div>
      </div>
    </section>
</x-client-layout>
