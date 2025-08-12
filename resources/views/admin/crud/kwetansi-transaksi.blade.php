<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kwitansi Pembayaran</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f9f9f9;
        padding: 20px;
    }
    .receipt-container {
        max-width: 700px;
        background: #fff;
        margin: auto;
        padding: 30px;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .header {
        display: flex;
        align-items: center;
        border-bottom: 2px solid #333;
        padding-bottom: 10px;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .header img {
        height: 80px;
    }
    .company-info h2 {
        margin: 0;
        color: #333;
    }
    .company-info p {
        margin: 2px 0;
        font-size: 14px;
        color: #666;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    td {
        padding: 8px;
        font-size: 14px;
    }
    td:first-child {
        font-weight: bold;
        width: 40%;
}
.footer {
    text-align: right;
    margin-top: 30px;
}

.footer p {
    margin: 0;
}

.footer .statement {
    margin-bottom: 60px;
    font-style: italic;
}

.footer .signature {
    display: inline-block;
    text-align: center;
}

.footer .signature-line {
    border-top: 1px solid #000;
    width: 200px;
    margin: 0 auto;
}

.footer .signature-name {
    margin-top: 5px;
    font-weight: bold;
}

</style>

</head>
<body>

<div class="receipt-container">
    <div class="header">
        <img src="{{ asset('aset/image/icon-brand.png') }}" alt="Logo Perusahaan">
        <div class="company-info">
            <h2>Diary Project</h2>
            <p>{{ $about->alamat }}</p>
            <p>Telp: {{ $about->kontak }}</p>
        </div>
    </div>

    <h3 style="text-align: center; margin-bottom: 20px;">Kwitansi Pembayaran</h3>

    <table>
        <tr>
            <td>ID Transaksi</td>
            <td>: {{ $trx->id }}</td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td>: {{ $trx->user->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>Paket</td>
            <td>: {{ $trx->booking->package->nama_paket }}</td>
        </tr>
        <tr>
            <td>Tanggal Acara</td>
            <td>: {{ \Carbon\Carbon::parse($trx->booking->tanggal_acara)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Jumlah Bayar</td>
            <td>: Rp {{ number_format($trx->jumlah_bayar, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
            <td>: {{ ucfirst($trx->status) }}</td>
        </tr>
        <tr>
            <p>*Silahkan dibawa sebagai syarat pelunasan</p>
        </tr>
    </table>

    <div class="footer">
    <p>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
    <p class="statement">
        Saya selaku <strong>{{ ucfirst($userAdmin->role) }}</strong> bertanda tangan di bawah ini:
    </p>
    <div class="signature">
        <div class="signature-line"></div>
        <p class="signature-name">{{ $userAdmin->nama_lengkap }}</p>
    </div>
</div>
</div>


    <script>
        window.print();
    </script>
</body>
</html>
