<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ base_path('public/assets/css/pdf-styles.css') }}">
</head>

<body>
    {{-- page 1 --}}
    <div class="page">
        <div class="base-container">
            <div class="main-container">
                <div class="container">
                    <section class="logo-container">
                        <div class="d-flex justify-content-center align-items-center">
                            <div><img src="{{ base_path('public/assets/images/bumn1.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/bumn2.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/telkom.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/fhci.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/magenta.png') }}" alt="logo"
                                    class="logo">
                            </div>
                        </div>
                    </section>
                    <section class="title-container">
                        <div class="d-flex flex-column align-items-center">
                            <div class="title">
                                <h1 class="title-text">SERTIFIKAT</h1>
                            </div>
                            <span class="subtitle">Nomor : {{ $data['nomor'] }}</span>
                        </div>
                    </section>
                    <section class="content-container">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class='given-to'>Diberikan Kepada</h5>
                            <div class="name">
                                <h2 class="name-text">{{ $data['nama'] }}</h2>
                            </div>
                            <p class="content-title">Telah Melaksanakan</p>
                            <p class="content">
                                MAGANG GENERASI BERTALENTA BUMN (MAGENTA BUMN) di <b>PT Telkom Indonesia (Persero)
                                    Tbk</b>
                                pada posisi
                                <b>UI Designer</b>, mulai dari tanggal 21 Oktober 2022 sampai tanggal 21 Januari 2023
                                dengan
                                hasil
                                <b>{{ $total_string }}</b>
                            </p>
                            <p class="content-end mt-4">Jakarta, 10 November 2022</p>
                        </div>
                    </section>
                    <section class="footer-container">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column align-items-center">
                                <p class="from">Kementrian BUMN</p>
                                <p class="who">Erick Thohir</p>
                                <p class="role">Menteri BUMN</p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <p class="from">FHCI</p>
                                <p class="who">Alexandra Askandar</p>
                                <p class="role">Ketua Umum</p>
                            </div>
                        </div>
                    </section>
                </div>
                <section class="code">
                    <div class="d-flex flex-column align-items-center">
                        <div class='qr-code-text'>
                            <span>QR Code Verifikasi Sertifikat</span>
                        </div>
                        <div>
                            <img src="{{ base_path('public/assets/images/' . $data['qrcode']) }}" alt="qr-code"
                                class='qr-code' />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- page 4 --}}
    <div class="page">
        <div class="base-container">
            <div class="main-container">
                <div class="container">
                    <section class="logo-container">
                        <div class="d-flex justify-content-center align-items-center">
                            <div><img src="{{ base_path('public/assets/images/bumn1.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/bumn2.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/telkom.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/fhci.png') }}" alt="logo"
                                    class="logo">
                            </div>
                            <div><img src="{{ base_path('public/assets/images/magenta.png') }}" alt="logo"
                                    class="logo">
                            </div>
                        </div>
                    </section>
                    <section class="title-container">
                        <div class="d-flex flex-column align-items-center">
                            <div class="title">
                                <h1 class="title-text">SERTIFIKAT</h1>
                            </div>
                            <span class="subtitle">Nomor : {{ $data['nomor'] }}</span>
                        </div>
                    </section>
                    <section class="content-container">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class='given-to'>Diberikan Kepada</h5>
                            <div class="name">
                                <h2 class="name-text">{{ $data['nama'] }}</h2>
                            </div>
                            <p class="content-title">Telah Melaksanakan</p>
                            <p class="content">
                                MAGANG GENERASI BERTALENTA BUMN (MAGENTA BUMN) di <b>PT Telkom Indonesia (Persero)
                                    Tbk</b>
                                pada posisi
                                <b>UI Designer</b>, mulai dari tanggal 21 Oktober 2022 sampai tanggal 21 Januari 2023
                                dengan
                                hasil
                                <b>{{ $total_string }}</b>
                            </p>
                            <p class="content-end mt-4">Jakarta, 10 November 2022</p>
                        </div>
                    </section>
                    <section class="footer-container">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center">
                                <p class="from">Kementrian BUMN</p>
                                <p class="who">Erick Thohir</p>
                                <p class="role">Menteri BUMN</p>
                            </div>
                        </div>
                    </section>
                </div>
                <section class="code">
                    <div class="d-flex flex-column align-items-center">
                        <div class='qr-code-text'>
                            <span>QR Code Verifikasi Sertifikat</span>
                        </div>
                        <div>
                            <img src="{{ base_path('public/assets/images/' . $data['qrcode']) }}" alt="qr-code"
                                class='qr-code' />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- page 3 --}}
    <div class="page three">
        <div class="base-container">
            <div class="main-container">
                <div class="container">
                    <section class="header-container">
                        <div class="header">
                            <div class="header-title w-50">
                                <div class="header-title-text">
                                    Daftar Nilai Magang Generasi Bertalenta
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    PT Telkom Indonesia (Persero) Tbk
                                </div>
                            </div>
                            <div class="logo-container">
                                <img src="{{ base_path('public/assets/images/bumn1.png') }}" alt="bumn1"
                                    class="header-logo">
                                <img src="{{ base_path('public/assets/images/bumn2.png') }}" alt="bumn2"
                                    class="header-logo">
                                <img src="{{ base_path('public/assets/images/telkom.png') }}" alt="telkom"
                                    class="header-logo">
                                <img src="{{ base_path('public/assets/images/fhci.png') }}" alt="fhci"
                                    class="header-logo">
                                <img src="{{ base_path('public/assets/images/magenta.png') }}" alt="magenta"
                                    class="header-logo">
                            </div>
                        </div>
                    </section>
                    <section class="profile mb-3">
                        <div class="profile-container">
                            <div class="profile-univ">
                                <div class="d-flex align-items-start">
                                    <div class="w-50">
                                        <table>
                                            <tr>
                                                <td>Nama Mahasiswa</td>
                                                <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                <td>{{ $data['nama'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>NIM</td>
                                                <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                <td>{{ $data['nim'] }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="w-50">
                                        <table>
                                            <tr>
                                                <td>Fakultas/Jurusan</td>
                                                <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                <td>{{ $data['fakultas'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Perguruan Tinggi</td>
                                                <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                <td>{{ $data['perguruanTinggi'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Posisi Magang</td>
                                                <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                <td>{{ $data['posisi'] }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="content-container">
                        <table class="w-100 table table-bordered border-dark table-centered performance-table">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Komponen</th>
                                <th colspan="2">Daftar Isi</th>
                            </tr>
                            <tr>
                                <th>Angka</th>
                                <th>Huruf</th>
                            </tr>
                            @foreach ($data['performance'] as $performance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $performance['ket'] }}</td>
                                    <td>{{ $performance['nilai'] }}</td>
                                    <td><i>{{ $performance['nilai_s'] }}</i></td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="2">Total Nilai Pengembangan (A)</th>
                                <td class="content-summary">{{ $total_number }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th colspan="2">Banyak Komponen (B)</th>
                                <td class="content-summary">7</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th colspan="2">Rata - Rata Nilai (Q=A/B)</th>
                                <td class="content-summary">{{ $total_summary }}</td>
                                <td class="content-summary">{{ $total_summary_s }}</td>
                            </tr>
                        </table>
                    </section>
                    <section class="w-100 mt-3">
                        <div class="d-flex align-items-start justify-content-between w-100">
                            <div>
                                <div class="d-flex flex-column align-items-start">
                                    <p class="m-0 mb-3">Kriteria Total Nilai Pembimbing Perusahaan</p>
                                    <table class="table small-pad">
                                        <tr>
                                            <td>86-100 : Sangat Memuaskan (A)</td>
                                        </tr>
                                        <tr>
                                            <td>71-85 : Memuaskan (B)</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <=70 : Cukup Memuaskan (C)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex flex-column align-items-center">
                                    <p class="place-1">Jakarta, 10 November 2022</p>
                                    <p class="role-1">Pembimbing</p>
                                    <p class="who-1">Andrian</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <div class="code-1 d-flex align-items-center justify-content-end">
                                    <p class="qr-code-text-1 me-3">Sertifikat ini dapat diverifikasi pada QR Code
                                        berikut</p>
                                    <img src="{{ base_path('public/assets/images/' . $data['qrcode']) }}"
                                        alt="qr-code" class="qr-code">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
