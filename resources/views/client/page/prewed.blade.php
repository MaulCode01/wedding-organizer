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
                @forelse($packages as $package)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item">
                            <a href="{{ route('admin.detail.produk', $package->package_key) }}" class="property-link">
                                <div class="property-image-wrapper">
                                    @if(!empty($package->image_package) && file_exists(public_path('aset/upload' . $package->image_package)))
                                        <img src="{{ asset('aset/upload'. $package->image_package) }}" alt="{{ $package->nama_paket }}" class="img-fluid">
                                    @else
                                        <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Default Image" class="img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="property-details">
                                <div class="property-header">
                                    <div class="property-price">Rp {{ number_format($package->harga, 0, ',', '.') }}</div>
                                </div>
                                <h4 class="property-title">{{ $package->nama_paket }}</h4>
                                <div class="property-specs">
                                    @if(!empty($package->fitur_1) && is_array($package->fitur_1))
                                        @foreach($package->fitur_1 as $fitur)
                                            <div class="spec-item">
                                                <i class="bi bi-check-circle"></i>
                                                <span>{{ $fitur }}</span>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        Belum ada paket {{ $kategori }} tersedia.
                    </div>
                </div>
                @endforelse
            </div>
            </div>
        </div>
    </div>
</section>



</x-client-layout>
