<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan - GDS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root { --gds-primary: #0047AB; --gds-gradient: linear-gradient(120deg, #0047AB 0%, #E91E63 100%); }
        body { 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; 
            color: #2c3e50; 
            line-height: 1.6; 
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .page-header { background: var(--gds-gradient); color: white; padding: 120px 0 60px; text-align: center; }
        .page-header h1 { font-size: 3rem; font-weight: 800; }
        .content-section { 
            padding: 60px 0; 
            max-width: 900px; 
            margin: 0 auto; 
        }
        h2 { 
            color: var(--gds-primary); 
        }
        .section-box { 
            background: white; 
            padding: 2rem; 
            margin-bottom: 2rem; 
            border-radius: 10px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .main-footer {
            background: var(--gds-dark);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
            padding-bottom: 3rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-about h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .footer-about p {
            opacity: 0.8;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--gds-accent);
            transform: translateY(-3px);
        }

        .footer-links h5 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 0.8rem;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: var(--gds-accent);
            padding-left: 5px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
        }

        .copyright {
            opacity: 0.7;
            font-size: 0.95rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .mobile-toggle {
                display: block;
            }
        }

        .main-footer {
            background: var(--gds-dark);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
            padding-bottom: 3rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-about h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .footer-about p {
            opacity: 0.8;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--gds-accent);
            transform: translateY(-3px);
        }

        .footer-links h5 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 0.8rem;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: var(--gds-accent);
            padding-left: 5px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
        }

        .copyright {
            opacity: 0.7;
            font-size: 0.95rem;
        }

        @media (max-width: 992px) {
            .footer-top {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('navigasi')

<script src="nav-init.js"></script>

    <div class="page-header">
        <h1><i class="bi bi-file-text-fill"></i> Syarat & Ketentuan</h1>
        <p>Terakhir diperbarui: Januari 2026</p>
    </div>

    <div class="content-section">
            <div class="section-box">
                <p>Syarat dan ketentuan ini mengatur penggunaan layanan internet yang disediakan oleh PT Globalriau Data Solusi. Dengan menggunakan layanan kami, Anda setuju untuk terikat dengan syarat dan ketentuan berikut.</p>
            </div>

            <div class="section-box">
                <h2>1. Definisi</h2>
                <ul>
                    <li><strong>Layanan:</strong> Layanan internet dan jaringan yang disediakan oleh GDS</li>
                    <li><strong>Pelanggan:</strong> Individu atau badan hukum yang menggunakan layanan GDS</li>
                    <li><strong>SLA:</strong> Service Level Agreement yang menjamin tingkat layanan tertentu</li>
                    <li><strong>Downtime:</strong> Periode ketika layanan tidak tersedia</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>2. Pendaftaran dan Aktivasi</h2>
                <ul>
                    <li>Pelanggan harus mengisi formulir pendaftaran lengkap dan benar</li>
                    <li>Menyertakan dokumen identitas dan legalitas perusahaan</li>
                    <li>Pembayaran biaya instalasi (jika ada) sebelum proses instalasi</li>
                    <li>Waktu aktivasi sesuai dengan paket yang dipilih</li>
                    <li>GDS berhak menolak pendaftaran tanpa memberikan alasan</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>3. Pembayaran</h2>
                <ul>
                    <li>Pembayaran dilakukan di muka setiap bulan/periode berlangganan</li>
                    <li>Layanan akan dinonaktifkan jika terlambat 7 hari dari tanggal jatuh tempo</li>
                    <li>Biaya aktivasi kembali dikenakan untuk layanan yang dinonaktifkan</li>
                    <li>Tidak ada pengembalian dana untuk pembayaran yang sudah dilakukan</li>
                    <li>Harga dapat berubah dengan pemberitahuan 30 hari sebelumnya</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>4. Penggunaan Layanan</h2>
                <ul>
                    <li>Pelanggan bertanggung jawab atas seluruh aktivitas menggunakan koneksi mereka</li>
                    <li>Dilarang menggunakan layanan untuk aktivitas ilegal atau melanggar hukum</li>
                    <li>Dilarang melakukan spam, hacking, atau aktivitas berbahaya lainnya</li>
                    <li>Dilarang menyalahgunakan bandwidth untuk merugikan pengguna lain</li>
                    <li>GDS berhak memblokir akses jika terdeteksi penyalahgunaan</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>5. Service Level Agreement (SLA)</h2>
                <ul>
                    <li>Internet Dedicated: uptime 99.9%</li>
                    <li>Internet Broadband: uptime 95-98%</li>
                    <li>Kompensasi diberikan jika SLA tidak terpenuhi</li>
                    <li>Downtime akibat force majeure tidak dihitung dalam SLA</li>
                    <li>Maintenance terjadwal diinformasikan minimal 3 hari sebelumnya</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>6. Technical Support</h2>
                <ul>
                    <li>Support 24/7 untuk Internet Dedicated</li>
                    <li>Support jam kerja untuk Internet Broadband (upgrade 24/7 tersedia)</li>
                    <li>Response time sesuai priorit issue</li>
                    <li>Pelanggan wajib melaporkan gangguan segera</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>7. Perangkat dan Equipment</h2>
                <ul>
                    <li>Perangkat GDS (modem, router) tetap menjadi milik GDS</li>
                    <li>Pelanggan bertanggung jawab atas kerusakan atau kehilangan perangkat</li>
                    <li>Biaya penggantian perangkat dikenakan sesuai harga perangkat</li>
                    <li>Pelanggan tidak diperbolehkan memodifikasi perangkat tanpa izin</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>8. Pemutusan Layanan</h2>
                <ul>
                    <li>Pelanggan dapat mengajukan pemutusan dengan pemberitahuan 30 hari</li>
                    <li>Sisa pembayaran tidak dapat dikembalikan</li>
                    <li>Perangkat GDS harus dikembalikan dalam kondisi baik</li>
                    <li>GDS dapat memutus layanan jika terjadi pelanggaran</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>9. Batasan Tanggung Jawab</h2>
                <ul>
                    <li>GDS tidak bertanggung jawab atas kerugian akibat downtime di luar kendali</li>
                    <li>Kompensasi maksimal sebesar biaya berlangganan 1 bulan</li>
                    <li>GDS tidak bertanggung jawab atas konten yang diakses pelanggan</li>
                    <li>Pelanggan bertanggung jawab penuh atas keamanan internal network mereka</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>10. Force Majeure</h2>
                <p>GDS tidak bertanggung jawab atas keterlambatan atau kegagalan layanan akibat:</p>
                <ul>
                    <li>Bencana alam (gempa, banjir, kebakaran)</li>
                    <li>Perang, kerusuhan, terorisme</li>
                    <li>Kebijakan pemerintah</li>
                    <li>Pemadaman listrik berkala</li>
                    <li>Gangguan infrastruktur telekomunikasi nasional</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>11. Perubahan Syarat & Ketentuan</h2>
                <p>GDS berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan diinformasikan melalui email atau website. Penggunaan layanan setelah perubahan dianggap sebagai persetujuan terhadap syarat baru.</p>
            </div>

            <div class="section-box">
                <h2>12. Hukum yang Berlaku</h2>
                <p>Syarat dan ketentuan ini tunduk pada hukum Republik Indonesia. Segala perselisihan akan diselesaikan melalui musyawarah atau pengadilan di wilayah domisili GDS.</p>
            </div>

            <div class="section-box">
                <h2>13. Kontak</h2>
                <p>Untuk pertanyaan terkait syarat dan ketentuan, hubungi:</p>
                <p><strong>Email:</strong> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="127e7775737e52757e7d70737e607b73673c717d3c7b76">[email&#160;protected]</a><br>
            </div>
    </div>
    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-about">
                    <h4>Globalriau Data Solusi</h4>
                    <p>Solusi jaringan internet profesional yang menghadirkan konektivitas berkualitas tinggi untuk
                        mendukung transformasi digital bisnis Anda.</p>
                    <div class="social-links">
                        <a href="https://facebook.com/globalriau" target="_blank" class="social-link"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/globalriau" target="_blank" class="social-link"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/company/globalriau" target="_blank" class="social-link"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://twitter.com/globalriau" target="_blank" class="social-link"><i
                                class="bi bi-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h5>Perusahaan</h5>
                    <ul>
                        <li><a href="{{ route('home') }}#tentang">Tentang Kami</a></li>
                        <li><a href="{{ route('home') }}#layanan">Layanan</a></li>
                        <li><a href="{{ route('home') }}#keunggulan">Keunggulan</a></li>
                        <li><a href="{{ route('home') }}#kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="{{ route('internet.dedicated') }}">Internet Dedicated</a></li>
                        <li><a href="{{ route('internet.broadband') }}">Internet Broadband</a></li>
                        <li><a href="{{ route('managed.network') }}">Managed Network</a></li>
                        <li><a href="{{ route('support.maintenance') }}">Support & Maintenance</a></li>

                    </ul>
                </div>
                <div class="footer-links">
                    <h5>Informasi</h5>
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                        <li><a href="{{ route('terms') }}">Syarat & Ketentuan</a></li>
                        <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copyright">&copy; 2026 Globalriau Data Solusi (GDS). All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>