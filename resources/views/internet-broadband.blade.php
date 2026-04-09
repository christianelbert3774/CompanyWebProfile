<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Broadband - GDS Globalriau Data Solusi</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0033CC;
            --gds-secondary: #FF0000;
            --gds-accent: #FF4081;
            --gds-dark: #0d1117;
            --gds-light: #eceff1;
            --gds-gradient: linear-gradient(120deg, #0033CC 0%, #FF0000 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #2c3e50;
            line-height: 1.6;
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gds-primary);
            margin-bottom: 2rem;
        }

        .feature-box {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            border-left: 4px solid var(--gds-accent);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .benefit-card {
            text-align: center;
            padding: 2rem;
            background: var(--gds-light);
            border-radius: 15px;
        }

        .benefit-icon {
            width: 70px;
            height: 70px;
            background: var(--gds-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .benefit-icon i {
            font-size: 2rem;
            color: white;
        }

        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .pricing-card {
            display: flex;
            flex-direction: column;
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gds-primary);
        }

        .btn-cta {
            background: var(--gds-gradient);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
            margin-bottom: 1.5rem;
        }

        .content-section ul,
        .feature-box ul {
            list-style: none;
            padding: 0;
        }

        .content-section ul li,
        .feature-box ul li {
            padding: 0.5rem 0;
            padding-left: 2rem;
            position: relative;
        }

        .content-section ul li:before,
        .feature-box ul li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--gds-accent);
            font-weight: bold;
        }

          .mobile-toggle {
                display: none;
                background: none;
                border: none;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
            }

            @media (max-width: 992px) {
                .mobile-toggle {
                    display: block;
                }
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

<script src="{{ asset('nav-init.js') }}"></script>

    <div class="page-header">
        <h1><i class="bi bi-reception-4"></i> Internet Broadband</h1>
        <p>Koneksi Cepat dan Terjangkau untuk Bisnis Anda</p>
    </div>

    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Apa itu Internet Broadband?</h2>
            <div class="feature-box">
                <p style="font-size: 1.1rem;">Internet Broadband GDS adalah layanan koneksi internet berkecepatan tinggi dengan teknologi fiber optik yang memberikan performa optimal dengan harga yang lebih terjangkau. Cocok untuk UKM, kantor cabang, dan bisnis yang membutuhkan koneksi stabil dengan budget efisien.</p>
            </div>

            <h2 class="section-title">Keunggulan Broadband GDS</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h4>Kecepatan Tinggi</h4>
                    <p>Hingga 100 Mbps dengan teknologi fiber optik</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h4>Harga Kompetitif</h4>
                    <p>Solusi internet berkualitas dengan budget efisien</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <h4>Instalasi Cepat</h4>
                    <p>Setup dan aktivasi dalam 3-5 hari kerja</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4>Support Responsif</h4>
                    <p>Customer support siap membantu kapan saja</p>
                </div>
            </div>

            <h2 class="section-title">Cocok Untuk:</h2>
            <div class="feature-box">
                <ul>
                    <li><strong>UKM & Startup</strong> - Budget efisien dengan kualitas terjamin</li>
                    <li><strong>Kantor Cabang</strong> - Koneksi reliable untuk operasional harian</li>
                    <li><strong>Co-working Space</strong> - Internet stabil untuk banyak pengguna</li>
                    <li><strong>Retail & F&B</strong> - Support kasir online dan layanan digital</li>
                    <li><strong>Klinik & Apotek</strong> - Akses sistem dan database lancar</li>
                </ul>
            </div>

            <h2 class="section-title">Paket Internet Broadband</h2>
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h3>Home Office</h3>
                    <div class="price">20 Mbps</div>
                    <p style="color: #64748b;">Perfect untuk WFH & bisnis rumahan</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Unlimited Quota</li>
                        <li>1 IP Public</li>
                        <li>Free Instalasi</li>
                        <li>Support 24/7</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20paket%20Broadband%20Home%20Office%2020%20Mbps" 
                    class="btn-cta" target="_blank">Pesan Sekarang</a>
                </div>

                <div class="pricing-card">
                    <h3>SME</h3>
                    <div class="price">50 Mbps</div>
                    <p style="color: #64748b;">Untuk kantor kecil-menengah</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Unlimited Quota</li>
                        <li>2 IP Public</li>
                        <li>Free Modem & Router</li>
                        <li>SLA 95%</li>
                        <li>Priority Support</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20paket%20Broadband%20SME%2050%20Mbps" 
                    class="btn-cta" target="_blank">Pesan Sekarang</a>
                </div>

                <div class="pricing-card">
                    <h3>Corporate</h3>
                    <div class="price">100 Mbps</div>
                    <p style="color: #64748b;">Solusi untuk kantor corporate</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Unlimited Quota</li>
                        <li>4 IP Public</li>
                        <li>Premium Equipment</li>
                        <li>SLA 98%</li>
                        <li>Managed Service Available</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20paket%20Broadband%20Corporate%20100%20Mbps" 
                    class="btn-cta" target="_blank">Pesan Sekarang</a>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
