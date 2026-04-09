<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - GDS Globalriau Data Solusi</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0033CC;
            --gds-gradient: linear-gradient(120deg, #0033CC 0%, #FF0000 100%);
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
        .content-section { padding: 60px 0; max-width: 900px; margin: 0 auto; }
        .faq-item { background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); cursor: pointer; }
        .faq-question { font-weight: 700; color: var(--gds-primary); display: flex; justify-content: space-between; align-items: center; }
        .faq-answer { margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #e0e0e0; display: none; }
        .faq-item.active .faq-answer { display: block; }
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
        .faq-contact { text-align: center; margin: 4rem 0; display: flex; flex-direction: column; gap: 1rem; align-items: center; }
    </style>
</head>
<body>
    @include('navigasi')

<script src="{{ asset('nav-init.js') }}"></script>


    <div class="page-header">
        <h1><i class="bi bi-question-circle-fill"></i> Frequently Asked Questions</h1>
        <p>Temukan jawaban untuk pertanyaan yang sering diajukan</p>
    </div>

    <div class="content-section">
        <div style="padding: 0 2rem;">
            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apa perbedaan Internet Dedicated dan Broadband?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Internet Dedicated memberikan bandwidth eksklusif 1:1 yang tidak di-share dengan pengguna lain, cocok untuk bisnis yang membutuhkan koneksi stabil dan konsisten. Internet Broadband adalah koneksi shared dengan ratio tertentu, lebih ekonomis dan cocok untuk UKM dengan kebutuhan standar.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Berapa lama proses instalasi?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Internet Broadband: 3-5 hari kerja. </p>
                    <p>Internet Dedicated: 7-14 hari kerja.</p>
                    <p><b>Perlu diperhatikan bahwa waktu instalasi bisa berbeda tergantung lokasi dan ketersediaan infrastruktur.</b></p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apakah ada biaya instalasi?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Untuk paket tertentu kami memberikan free instalasi. Silakan hubungi sales kami untuk informasi promo terkini.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Bagaimana jika terjadi gangguan?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Kami memiliki NOC 24/7 yang siap menangani gangguan. Untuk Internet Dedicated, kami menjamin response time 15 menit untuk critical issue dengan SLA 99.9%.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apakah bisa upgrade/downgrade paket?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Ya, Anda bisa upgrade atau downgrade paket sesuai kebutuhan. Hubungi customer service kami untuk prosesnya.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apakah ada quota atau Fair Usage Policy (FUP)?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Semua paket kami adalah unlimited tanpa FUP. Anda bisa menggunakan internet sepuasnya tanpa khawatir quota habis.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Bagaimana cara pembayaran?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Kami menerima pembayaran via transfer bank, virtual account, dan untuk corporate client bisa dengan invoice/PO.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apakah GDS melayani di seluruh Indonesia?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Saat ini kami fokus melayani wilayah Sumatera, khususnya Riau dan sekitarnya. Untuk area lain, silakan hubungi sales kami untuk ketersediaan.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apa itu Managed Network Service?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Managed Network adalah layanan pengelolaan infrastruktur jaringan secara menyeluruh oleh tim engineer kami. Kami yang handle monitoring, maintenance, troubleshooting, security, dan optimasi jaringan Anda.</p>
                </div>
            </div>

            <div class="faq-item" onclick="this.classList.toggle('active')">
                <div class="faq-question">
                    <span>Apakah support berbayar?</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Support standar 24/7 sudah termasuk dalam paket. Untuk managed service atau konsultasi khusus, ada biaya tambahan sesuai scope of work.</p>
                </div>
            </div>

            <div class="faq-contact">
                <h4>Masih Ada Pertanyaan?</h4>
                <p>Hubungi tim kami untuk informasi lebih lanjut</p>
                <a href="https://wa.me/6281234567890" target="_blank" style="background: linear-gradient(120deg, #0047AB 0%, #E91E63 100%); color: white; padding: 1rem 2rem; border-radius: 10px; text-decoration: none; display: inline-block;">
                    <i class="bi bi-whatsapp"></i> Chat dengan Sales
                </a>
            </div>
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
