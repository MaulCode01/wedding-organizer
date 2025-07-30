<x-admin-layout>
<x-slot:title>Dashboard Admin - Home</x-slot:title>



<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

            <div class="card-body">
                <h5 class="card-title">Penjualan Barang</h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                    <h6>145</h6>
                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title">Hasil Pendapatan</h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                    <h6>4.000.000</h6>
                </div>
                </div>
            </div>

            </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Customer</span></h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $dataUser }}</h6>
                    </div>
                    </div>

                </div>
            </div>
        </div><!-- End Customers Card -->

        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Total Penjualan barang</h5>

                <table class="table table-borderless datatable">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jenis Paket</th>
                    <th scope="col">Total Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>Wedding</td>
                        <td>1.200.000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>Prewed</td>
                        <td>1.100.000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>Dokumentasi</td>
                        <td>1.300.000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Ngentot</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>Dekorasi</td>
                        <td>1.600.000</td>
                    </tr>
                </tbody>
                </table>

            </div>

            </div>
        </div><!-- End Recent Sales -->

        <!-- Top Selling -->
        <div class="col-12">
            <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Penjualan Teratas</span></h5>

                <table class="table table-borderless">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jenit Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Terjual</th>
                    <th scope="col">Pendapatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>Wedding</td>
                        <td class="fw-bold">15.000</td>
                        <td>5</td>
                        <td>75.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>Wedding</td>
                        <td class="fw-bold">15.000</td>
                        <td>5</td>
                        <td>75.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>Wedding</td>
                        <td class="fw-bold">15.000</td>
                        <td>5</td>
                        <td>75.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>Wedding</td>
                        <td class="fw-bold">15.000</td>
                        <td>5</td>
                        <td>75.000</td>
                    </tr>
                </tbody>
                </table>

            </div>

            </div>
        </div><!-- End Top Selling -->

        </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body">
                <h5 class="card-title">Aktivitas Terkini</span></h5>
                <div class="activity">
                <div class="activity-item d-flex mb-3">
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start mx-2'></i>
                    <div class="activity-content">
                    <span class="fw-bold">Rina</span> memesan paket <a href="#" class="fw-bold text-dark">Wedding Intimate</a>
                    </div>
                </div>

                <div class="activity-item d-flex mb-3">
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start mx-2'></i>
                    <div class="activity-content">
                    Admin menambahkan paket dekorasi <span class="fw-bold">Rustic Elegance</span>
                    </div>
                </div>

                <div class="activity-item d-flex mb-3">
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start mx-2'></i>
                    <div class="activity-content">
                    <span class="fw-bold">Fajar</span> mendaftar sebagai client baru
                    </div>
                </div>

                <div class="activity-item d-flex mb-3">
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start mx-2'></i>
                    <div class="activity-content">
                    <span class="fw-bold">Dian</span> membatalkan booking paket Prewedding Outdoor
                    </div>
                </div>

                <div class="activity-item d-flex">
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start mx-2'></i>
                    <div class="activity-content">
                        <span class="fw-bold">Admin2</span> memperbarui harga paket <a href="#" class="fw-bold text-dark">Wedding Deluxe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</x-admin-layout>
