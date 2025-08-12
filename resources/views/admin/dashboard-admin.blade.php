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
                    <h6>{{ $totalUnit }}</h6>
                </div>
                </div>
            </div>

            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title">Hasil Pendapatan</h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. {{ number_format($totalPendapatan, '0', ',', '.') }}</h6>
                </div>
                </div>
            </div>
            </div>
        </div>

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
        </div>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Total Penjualan Barang</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Jenis Paket</th>
                                <th>Total Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataPenjualan as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->nama_lengkap ?? '-' }}</td>
                                    <td>{{ $data->package->content->kategori ?? '-' }}</td>
                                    <td>{{ $data->package->content->judul_konten ?? '-' }}</td>
                                    <td>{{ $data->package->nama_paket ?? '-' }}</td>
                                    <td>{{ number_format($data->transaction->jumlah_bayar ?? 0, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Penjualan Teratas</span></h5>
                <table class="table table-borderless">
                <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jenis Paket</th>
                                <th>Harga</th>
                                <th>Terjual</th>
                                <th>Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dataTopSelling as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="#" class="text-primary fw-bold">
                                        {{ $item->package->content->judul_konten ?? '-' }}
                                    </a>
                                </td>
                                <td>{{ $item->package->nama_paket ?? '-' }}</td>
                                <td class="fw-bold">{{ number_format($item->package->harga ?? 0, 0, ',', '.') }}</td>
                                <td>{{ $item->terjual }}</td>
                                <td>{{ number_format($item->pendapatan ?? 0, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</x-admin-layout>
