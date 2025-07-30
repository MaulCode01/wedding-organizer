<footer id="footer" class="footer accent-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="{{ route('page.hero') }}" class="logo d-flex align-items-center">
            <span class="sitename">Diary Project</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Halama Utama</h4>
          <ul>
            <li><a href="{{ route('page.hero') }}">Beranda</a></li>
            <li><a href="{{ route('page.about') }}">Tentang Kami</a></li>
            <li><a href="{{ route('page.contact') }}">Kontak Kami</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="{{ route('page.paket.wedding') }}">Wedding</a></li>
            <li><a href="{{ route('page.paket.prewed') }}">Prewed</a></li>
            <li><a href="{{ route('page.paket.mua') }}">Mua & Busana</a></li>
            <li><a href="{{ route('page.paket.dekor') }}">Dekorasi</a></li>
            <li><a href="{{ route('page.paket.dokumentasi') }}">Dokumentasi</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          {{-- <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div> --}}

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy;<span>Copyright</span> <strong class="px-1 sitename">Diary Project</strong><span>All Rights Reserved</span></p>
    </div>
  </footer>
