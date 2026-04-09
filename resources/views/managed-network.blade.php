<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managed Network - GDS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0047AB;
            --gds-secondary: #E91E63;
            --gds-accent: #FF4081;
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
        .content-section { padding: 60px 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }
        .section-title { font-size: 2rem; font-weight: 700; color: var(--gds-primary); margin-bottom: 2rem; }
        .feature-box { 
            background: white; 
            padding: 2rem; 
            border-radius: 15px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.1); 
            margin-bottom: 2rem; 
            border-left: 4px solid var(--gds-accent);
        }

        .service-list { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin: 3rem 0; 
        }

        .service-item { 
            background: #eceff1; 
            padding: 2rem; 
            border-radius: 15px; 
            border-left: 4px solid var(--gds-accent); 
        }
        .service-item h4 { 
            font-size: 1.25rem; 
            margin-bottom: 1rem; 
            color: var(--gds-primary); }

        .btn-cta { background: var(--gds-gradient); color: white; padding: 1rem 2rem; border-radius: 10px; text-decoration: none; display: inline-block; }

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
            margin-bottom: 0.8rem;
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
        <h1><i class="bi bi-diagram-3-fill"></i> Managed Network Service</h1>
        <p>Serahkan Pengelolaan Jaringan pada Ahlinya</p>
    </div>

    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Apa itu Managed Network?</h2>
            <div class="feature-box">
                <p style="font-size: 1.1rem;">Managed Network Service adalah layanan pengelolaan infrastruktur jaringan IT secara menyeluruh oleh tim engineer profesional GDS. Kami mengambil alih seluruh tanggung jawab monitoring, maintenance, troubleshooting, dan optimasi jaringan Anda, sehingga tim internal Anda bisa fokus pada core business.</p>
            </div>

            <h2 class="section-title">Layanan yang Kami Kelola</h2>
            <div class="service-list">
                <div class="service-item">
                    <h4><i class="bi bi-router"></i> Network Infrastructure</h4>
                    <p>Pengelolaan router, switch, firewall, dan semua perangkat jaringan</p>
                </div>
                <div class="service-item">
                    <h4><i class="bi bi-shield-lock"></i> Security Management</h4>
                    <p>Firewall configuration, IDS/IPS, VPN management, dan security patch</p>
                </div>
                <div class="service-item">
                    <h4><i class="bi bi-activity"></i> Performance Monitoring</h4>
                    <p>Real-time monitoring bandwidth, latency, packet loss, dan device health</p>
                </div>
                <div class="service-item">
                    <h4><i class="bi bi-cloud"></i> Cloud Integration</h4>
                    <p>Integrasi dengan cloud services (AWS, Azure, Google Cloud)</p>
                </div>
                <div class="service-item">
                    <h4><i class="bi bi-arrow-repeat"></i> Backup & Recovery</h4>
                    <p>Configuration backup, disaster recovery planning</p>
                </div>
                <div class="service-item">
                    <h4><i class="bi bi-graph-up"></i> Capacity Planning</h4>
                    <p>Analisa kebutuhan bandwidth dan rekomendasi upgrade</p>
                </div>
            </div>

            <h2 class="section-title">Keuntungan Managed Network</h2>
            <div class="feature-box">
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 1rem 0; border-bottom: 1px solid #e0e0e0;">
                        <strong>✓ Reduce Cost</strong> - Tidak perlu merekrut IT engineer full-time
                    </li>
                    <li style="padding: 1rem 0; border-bottom: 1px solid #e0e0e0;">
                        <strong>✓ Expertise Access</strong> - Akses ke tim engineer bersertifikasi
                    </li>
                    <li style="padding: 1rem 0; border-bottom: 1px solid #e0e0e0;">
                        <strong>✓ Proactive Monitoring</strong> - Deteksi masalah sebelum berdampak
                    </li>
                    <li style="padding: 1rem 0; border-bottom: 1px solid #e0e0e0;">
                        <strong>✓ 24/7 Support</strong> - Tim siaga setiap saat
                    </li>
                    <li style="padding: 1rem 0; border-bottom: 1px solid #e0e0e0;">
                        <strong>✓ Scalability</strong> - Mudah disesuaikan dengan pertumbuhan bisnis
                    </li>
                    <li style="padding: 1rem 0;">
                        <strong>✓ Compliance</strong> - Memastikan network sesuai standar keamanan
                    </li>
                </ul>
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
