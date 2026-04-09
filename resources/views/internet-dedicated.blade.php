<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Dedicated - GDS Globalriau Data Solusi</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0047AB;
            --gds-secondary: #E91E63;
            --gds-accent: #FF4081;
            --gds-dark: #0d1117;
            --gds-light: #eceff1;
            --gds-gradient: linear-gradient(120deg, #0047AB 0%, #E91E63 100%);
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

        .feature-box h3 {
            color: var(--gds-primary);
            margin-bottom: 1rem;
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
            transition: transform 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
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

        .pricing-section {
            background: var(--gds-light);
            padding: 60px 0;
        }

        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .pricing-card {
            display: flex;
            flex-direction: column;
            background: white;
            padding: 3rem 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .pricing-card:hover {
            transform: scale(1.05);
        }

        .pricing-card.featured {
            border: 3px solid var(--gds-accent);
            position: relative;
        }

        .featured-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--gds-accent);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 700;
        }

        .price {
            font-size: 3rem;
            font-weight: 800;
            color: var(--gds-primary);
            margin: 1rem 0;
        }

        .price small {
            font-size: 1.2rem;
            color: #64748b;
        }

        .cta-section {
            background: var(--gds-dark);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .btn-cta {
            background: var(--gds-gradient);
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
            margin-bottom: 1 rem;
        }

        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(233, 30, 99, 0.4);
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
    <!-- Navigation -->
    @include('navigasi')

<script src="{{ asset('nav-init.js') }}"></script>

    <!-- Page Header -->
    <div class="page-header">
        <h1><i class="bi bi-hdd-network-fill"></i> Internet Dedicated</h1>
        <p>Koneksi Eksklusif untuk Performa Maksimal Bisnis Anda</p>
    </div>

    <!-- Content -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Apa itu Internet Dedicated?</h2>
            <div class="feature-box">
                <p style="font-size: 1.1rem;">Internet Dedicated adalah layanan koneksi internet eksklusif yang memberikan bandwidth penuh dan stabil untuk kebutuhan bisnis Anda. Berbeda dengan internet konvensional yang bandwidth-nya dibagi dengan pengguna lain, Internet Dedicated memberikan jalur khusus yang sepenuhnya dialokasikan untuk perusahaan Anda.</p>
            </div>

            <h2 class="section-title">Keunggulan Internet Dedicated GDS</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h4>Bandwidth Eksklusif</h4>
                    <p>100% bandwidth dialokasikan khusus untuk Anda, tanpa sharing dengan pengguna lain</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>SLA 99.9%</h4>
                    <p>Jaminan uptime 99.9% dengan kompensasi jika tidak terpenuhi</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>
                    <h4>Symmetric Speed</h4>
                    <p>Kecepatan upload = download untuk kebutuhan transfer data dua arah</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h4>Scalable</h4>
                    <p>Mudah ditingkatkan kapasitasnya sesuai pertumbuhan bisnis</p>
                </div>
            </div>

            <h2 class="section-title">Fitur Lengkap</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box">
                        <h3><i class="bi bi-check-circle-fill text-success"></i> Infrastruktur Premium</h3>
                        <ul>
                            <li>Fiber optic backbone Tier-1</li>
                            <li>Redundant connection untuk failover</li>
                            <li>Equipment dari vendor terpercaya (Cisco, Juniper)</li>
                            <li>NOC 24/7 monitoring</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <h3><i class="bi bi-check-circle-fill text-success"></i> Layanan Tambahan</h3>
                        <ul>
                            <li>IP Public static (multiple IP tersedia)</li>
                            <li>Managed router & firewall (optional)</li>
                            <li>DDoS protection</li>
                            <li>Traffic monitoring & reporting</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Cocok Untuk:</h2>
            <div class="feature-box">
                <ul>
                    <li><strong>Perusahaan Korporat</strong> - Membutuhkan koneksi stabil untuk operasional harian</li>
                    <li><strong>Data Center & Cloud Provider</strong> - Memerlukan bandwidth besar dan rendah latency</li>
                    <li><strong>E-commerce & Fintech</strong> - Membutuhkan keamanan dan kecepatan transaksi</li>
                    <li><strong>Media & Broadcasting</strong> - Upload konten berkualitas tinggi</li>
                    <li><strong>Software House</strong> - Development, testing, dan deployment aplikasi</li>
                    <li><strong>Institusi Pendidikan</strong> - Mendukung e-learning dan sistem akademik online</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="pricing-section">
        <div class="container">
            <h2 class="section-title text-center">Paket Internet Dedicated</h2>
            <p class="text-center" style="color: #64748b; font-size: 1.1rem;">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h3>Starter</h3>
                    <div class="price">10 <small>Mbps</small></div>
                    <p>Ideal untuk kantor kecil & startup</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Bandwidth Dedicated 1:1</li>
                        <li>1 IP Public Static</li>
                        <li>SLA 99.5%</li>
                        <li>Support 24/7</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Internet%20Dedicated%20Starter%2010%20Mbps" 
                    class="btn-cta" target="_blank">Hubungi Sales</a>
                </div>

                <div class="pricing-card featured">
                    <span class="featured-badge">POPULER</span>
                    <h3>Business</h3>
                    <div class="price">50 <small>Mbps</small></div>
                    <p>Untuk perusahaan menengah</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Bandwidth Dedicated 1:1</li>
                        <li>4 IP Public Static</li>
                        <li>SLA 99.9%</li>
                        <li>Managed Router (Optional)</li>
                        <li>Priority Support 24/7</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Internet%20Dedicated%20Business%2050%20Mbps" 
                    class="btn-cta" target="_blank">Hubungi Sales</a>
                </div>

                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">100+ <small>Mbps</small></div>
                    <p>Solusi untuk korporat besar</p>
                    <ul style="text-align: left; margin: 2rem 0;">
                        <li>Bandwidth Dedicated 1:1</li>
                        <li>IP Public Customizable</li>
                        <li>SLA 99.9%</li>
                        <li>Redundant Connection</li>
                        <li>Managed Network Service</li>
                        <li>Dedicated Account Manager</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Internet%20Dedicated%20Enterprise" 
                    class="btn-cta" target="_blank">Hubungi Sales</a>
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
