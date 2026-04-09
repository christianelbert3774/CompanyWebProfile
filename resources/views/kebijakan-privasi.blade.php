<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi - GDS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0047AB;
            --gds-gradient: linear-gradient(120deg, #0047AB 0%, #E91E63 100%);
        }
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
        .page-header { 
            background: var(--gds-gradient); 
            color: white; 
            padding: 120px 0 60px; 
            text-align: center; 
        }
        .page-header h1 { 
            font-size: 3rem; 
            font-weight: 800; 
        }
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
        <h1><i class="bi bi-shield-lock-fill"></i> Kebijakan Privasi</h1>
        <p>Terakhir diperbarui: Januari 2026</p>
    </div>

    <div class="content-section">
            <div class="section-box">
                <p>PT Globalriau Data Solusi berkomitmen untuk melindungi privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda.</p>
            </div>

            <div class="section-box">
                <h2>1. Informasi yang Kami Kumpulkan</h2>
                <p>Kami dapat mengumpulkan informasi berikut:</p>
                <ul>
                    <li><strong>Informasi Identitas:</strong> Nama, alamat email, nomor telepon, alamat perusahaan</li>
                    <li><strong>Informasi Bisnis:</strong> Nama perusahaan, jabatan, NPWP</li>
                    <li><strong>Informasi Teknis:</strong> IP address, log akses, data penggunaan bandwidth</li>
                    <li><strong>Informasi Pembayaran:</strong> Detail transaksi dan invoice (tidak menyimpan informasi kartu kredit)</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>2. Penggunaan Informasi</h2>
                <p>Informasi yang kami kumpulkan digunakan untuk:</p>
                <ul>
                    <li>Menyediakan dan mengelola layanan internet</li>
                    <li>Memproses pembayaran dan mengelola akun</li>
                    <li>Memberikan technical support dan customer service</li>
                    <li>Monitoring performa jaringan dan troubleshooting</li>
                    <li>Mengirimkan informasi layanan, update, dan promosi</li>
                    <li>Memenuhi kewajiban hukum dan regulasi</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>3. Keamanan Data</h2>
                <p>Kami menerapkan langkah-langkah keamanan teknis dan organisasi untuk melindungi data Anda:</p>
                <ul>
                    <li>Enkripsi data saat transmisi</li>
                    <li>Akses terbatas pada personel yang berwenang</li>
                    <li>Regular security audit dan monitoring</li>
                    <li>Backup data secara berkala</li>
                    <li>Firewall dan sistem keamanan berlapis</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>4. Berbagi Informasi</h2>
                <p>Kami tidak akan menjual atau menyewakan informasi pribadi Anda kepada pihak ketiga. Informasi hanya dibagikan dalam kondisi berikut:</p>
                <ul>
                    <li>Dengan persetujuan eksplisit dari Anda</li>
                    <li>Kepada penyedia layanan yang membantu operasional kami (dengan NDA)</li>
                    <li>Jika diwajibkan oleh hukum atau proses hukum</li>
                    <li>Untuk melindungi hak dan keamanan kami atau pihak lain</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>5. Hak Anda</h2>
                <p>Anda memiliki hak untuk:</p>
                <ul>
                    <li>Mengakses data pribadi yang kami simpan</li>
                    <li>Meminta koreksi atau update data</li>
                    <li>Meminta penghapusan data (sesuai ketentuan)</li>
                    <li>Menolak penggunaan data untuk marketing</li>
                    <li>Mengajukan keluhan terkait pengelolaan data</li>
                </ul>
            </div>

            <div class="section-box">
                <h2>6. Cookies dan Tracking</h2>
                <p>Website kami menggunakan cookies untuk meningkatkan pengalaman pengguna. Anda dapat mengatur browser untuk menolak cookies, namun beberapa fitur website mungkin tidak berfungsi optimal.</p>
            </div>

            <div class="section-box">
                <h2>7. Retensi Data</h2>
                <p>Kami menyimpan data pribadi Anda selama Anda masih menjadi pelanggan aktif dan hingga 5 tahun setelah berakhirnya layanan untuk keperluan legal dan administratif.</p>
            </div>

            <div class="section-box">
                <h2>8. Perubahan Kebijakan</h2>
                <p>Kami berhak mengubah kebijakan privasi ini sewaktu-waktu. Perubahan signifikan akan diinformasikan melalui email atau notifikasi di website.</p>
            </div>

            <div class="section-box">
                <h2>9. Kontak</h2>
                <p>Jika Anda memiliki pertanyaan tentang kebijakan privasi ini atau ingin menggunakan hak Anda, silakan hubungi:</p>
                <p><strong>Email:</strong> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89f9fbe0ffe8eaf0c9eee5e6ebe8e5fbe0e8fca7eae6a7e0ed">[email&#160;protected]</a><br>
                <strong>Telepon:</strong> +62 761-123-456<br>
                <strong>Alamat:</strong> Jl. Rajawali Sakti No.7, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292</p>
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