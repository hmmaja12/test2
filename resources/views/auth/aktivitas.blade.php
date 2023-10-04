<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa Jurusan RPL</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Aktivitas Mahasiswa Jurusan RPL</h1>
        <hr>

        <!-- Aktivitas Mahasiswa -->
        <div class="row">
            <!-- Aktivitas 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/image/ti.png" class="card-img-top" alt="Foto Aktivitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Tiga Jurusan Politeknik Negeri Bengkalis, Ikuti Uji Sertifikasi Kompetensi Tenaga Kerja Konstruksi</h5>
                        <p class="card-text">Sebanyak 321 orang mahasiswa dari jurusan Teknik Sipil, Teknik Mesin dan Teknik Perkapalan mengikuti kegiatan Fasilitasi Pembekalan dan Uji Sertifikasi Kompetensi Tenaga Kerja Konstruksi.
                            Kegiatan ini diselenggarakan melalui kerjasama antara Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) melalui Direktorat Jenderal Bina Konstruksi Balai Jasa Kontruksi Wilayah I Banda Aceh.
                            Pembekalan dan Uji Sertifikasi Kompetensi Tenaga Kerja Konstruksi Wilayah I ini dibuka langsung oleh Direktur Polbeng, Muhamad Milchan. Rabu, 1 Mei 2019 di Kampus Politeknik Negeri Bengkalis.
                            “Kegiatan sertifikasi kompetensi ini sangat penting sekali bagi tenaga ahli dan untuk para mahasiswa, saya berharap dapat mengikuti kegiatan ini dengan serius semoga ilmu dan pengetahun dapat dimanfaatkan pada saat anda memasuki dunia kerja,” kata Milchan.</p>
                        <a href="/image/1.png" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Aktivitas 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/image/anwar.png" class="card-img-top" alt="Foto Aktivitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Polbeng Jadi Tuan Rumah Dalam Kegiatan ABEC Ke 11</h5>
                        <p class="card-text">Politeknik Negeri Bengkalis (Polbeng) menjadi tuan rumah dalam kegiatan Applied Business and Engineering Conference (ABEC) ke 11 yang dilaksanakan pada Kamis, 21 September 2023.
                            ABEC merupakan salah satu seminar nasional diselenggarakan Polbeng bekerjasama dengan 13 politeknik di Sumatera yakni Politeknik Negeri Batam, Politeknik Caltex Riau, Politeknik Negeri Manufaktur Bangka Belitung, Politeknik Negeri Pertanian Payakumbuh, Politeknik Negeri Padang, Politeknik Negari Medan, Politeknik Negeri Lampung, Politeknik Jambi, Politeknik Negeri Lhoksemawe, Politeknik Kampar, Politeknik Negeri Sriwijaya, Politeknik Negeri Media Kreatif dan Batam Tourism Polytecnic.
                            Ketua panitia Marhadi Sastra,S.T,M.T mengatakan jumlah paper yang telah diterima untuk ABEC Internasional sebanyak 158 Paper, ABEC nasional 58 Paper, sementara SNIT sebanyak 124 Paper dari penulis di berbagai perguruan tinggi yang ada di Indonesia. '
                            Selanjutnya Ketua Pusat Penelitian dan Pengabdian Pada Masyarakat (P3M) Polbeng, M. Affridon,S.T,M.T berharap dengan adanya kegiatan ini dapat meningkatkan perekonomian masyarakat khususnya di wilayah bengkalis dan untuk hasil penelitian ini kedepan diharapakan dapat bermanfaat bagiUsaha Mikro Kecil dan Menengah (UMKM) masyarakat sekitar.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Aktivitas Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>