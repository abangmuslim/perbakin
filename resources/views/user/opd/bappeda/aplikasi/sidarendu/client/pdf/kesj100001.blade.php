<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #007D00;
        color: white;
        text-align: left;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 999;
        /* Menambahkan z-index untuk mengatasi konten lain */
    }

    .logo {
        max-width: 100px;
        height: auto;
        margin-right: 20px;
    }

    .info {
        text-align: right;
        margin-right: 20px;
        /* Menambahkan margin kanan untuk jarak dari tepi kanan */
    }

    /* ... Kode CSS lainnya ... */

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    h4.card-title {
        text-align: center;
    }

    table {
        width: 100%;
        /* Menentukan lebar tabel 100% dari lebar halaman */
        border-collapse: collapse;
        table-layout: auto;
        /* Mengatur kolom menjadi fleksibel */
    }

    th {
        padding: 10px;
        text-align: left;
        border: 1px solid #000;
        background-color: darkgreen;
        /* Warna hijau tua */
        color: white;
        /* Warna teks putih untuk kontras */
    }

    td {
        padding: 10px;
        text-align: left;
        border: 1px solid #000;
    }

    .table-container {
        margin-left: auto;
        /* Mengatur margin kiri menjadi auto */
        margin-right: auto;
        /* Mengatur margin kanan menjadi auto */
        max-width: 600px;
        /* Menentukan lebar maksimum container tabel */
    }

    .profile-image {
        max-width: 100px;
        /* Menentukan lebar maksimum gambar */
        height: auto;
        /* Menyesuaikan tinggi gambar secara proporsional */
    }
</style>


<header>
    <img src="{{ asset('') }}storage/admin_template/mazer/assets/images/logo/logo-sidarendu.svg"
        alt="Logo Pemkab Aceh Tamiang" class="logo">
    <div class="info">
        <div>Nama Dinas</div>
        <div>Alamat Dinas</div>
        <!-- Tambahan informasi lainnya -->
    </div>
</header>


<h4 class="card-title">JUMLAH KELUARGA MENURUT TINGKAT KESEJAHTERAAN</h4>

<h4 class="card-title">TAHUN : {{ $TahunFilter }}</h4>

<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>KECAMATAN</th>
            <th>PRASEJAHTERA</th>
            <th>SEJAHTERA I</th>
            <th>SEJAHTERA II</th>
            <th>SEJAHTERA III</th>
            <th>SEJAHTERA III+</th>
            <th>JUMLAH</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @forelse ($pdfdata as $data)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $data->district->name }}</td>
                <td>{{ $data->prasejahtera }}</td>
                <td>{{ $data->sejahtera1 }}</td>
                <td>{{ $data->sejahtera2 }}</td>
                <td>{{ $data->sejahtera3 }}</td>
                <td>{{ $data->sejahtera3plus }}</td>
                <td>{{ $data->prasejahtera + $data->sejahtera1 + $data->sejahtera2 + $data->sejahtera3 + $data->sejahtera3plus}}</td>
            </tr>
            <?php $no++; ?>
        @empty
            <tr>
                <td colspan="9">Data tidak ditemukan!</td>
            </tr>
        @endforelse

    </tbody>
</table>
