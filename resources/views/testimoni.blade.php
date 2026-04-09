<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - GDS Globalriau Data Solusi</title>
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

        .section-title {
            text-align: center;
            max-width: 800ypx;
            margin: 0 auto 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .testimonial-card {
            display: flex;
            flex-direction: column;
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            transition: transform 0.3s;
            padding-bottom: 2rem;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
        }

        .quote-icon {
            font-size: 3rem;
            color: var(--gds-accent);
            opacity: 0.3;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .testimonial-text {
            font-size: 1.05rem;
            color: #475569;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding-top: 1.5rem;
            margin-top: auto;
            border-top: 2px solid var(--gds-light);
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            min-width: 60px;
            min-height: 60px;
            aspect-ratio: 1/1;
            background: var(--gds-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1;
        }

        .author-info h4 {
            margin: 0;
            font-size: 1.1rem;
            color: var(--gds-primary);
            font-weight: 700;
        }

        .author-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #64748b;
        }

        .rating {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .stats-section {
            background: var(--gds-light);
            padding: 60px 0;
            margin: 40px 0 0 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            background: white;
            padding: 2rem;
            border-radius: 15px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: var(--gds-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #64748b;
            margin-top: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .mobile-toggle {
                display: block;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
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
    <!-- Navigation -->
    @include('navigasi')

<script src="{{ asset('nav-init.js') }}"></script>

    <div class="page-header">
        <h1><i class="bi bi-chat-quote-fill"></i> Testimoni Klien</h1>
        <p>Apa Kata Mereka yang Sudah Menggunakan Layanan GDS</p>
    </div>

    <div class="content-section">
        <div class="container">
            <div class="section-title">
                <h2 style="color: var(--gds-primary); font-size: 2rem; font-weight: 700;">Kepercayaan dari Ratusan Klien</h2>
                <p style="font-size: 1.1rem; color: #64748b;">Testimoni nyata dari perusahaan-perusahaan yang telah merasakan keunggulan layanan internet GDS</p>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Sejak menggunakan Internet Dedicated dari GDS, operasional perusahaan kami jauh lebih lancar. Koneksi stabil 24/7 dan support teamnya sangat responsif. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">BR</div>
                        <div class="author-info">
                            <h4>Budi Raharjo</h4>
                            <p>IT Manager - PT Indotech Solutions</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Managed Network Service dari GDS benar-benar membantu kami. Tim IT internal bisa fokus ke project strategis karena infrastruktur jaringan sudah ditangani profesional oleh GDS."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SA</div>
                        <div class="author-info">
                            <h4>Siti Aminah</h4>
                            <p>CTO - Bank Riau Mandiri</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Harga kompetitif dengan kualitas premium. Broadband 50 Mbps dari GDS sangat worth it untuk kantor kami. Upload video untuk e-commerce jadi cepat banget!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">DW</div>
                        <div class="author-info">
                            <h4>Deni Wijaya</h4>
                            <p>Owner - Riau Fashion Store</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Pelayanan technical support GDS sangat memuaskan. Ketika ada gangguan, langsung ditangani dalam hitungan menit. SLA benar-benar terjaga dengan baik."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AP</div>
                        <div class="author-info">
                            <h4>Ahmad Pratama</h4>
                            <p>Network Admin - RS Arifin Achmad</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Sistem e-learning kampus kami bergantung pada koneksi internet yang stabil. GDS memberikan solusi dedicated yang sempurna untuk kebutuhan ribuan mahasiswa kami."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RH</div>
                        <div class="author-info">
                            <h4>Dr. Rina Handayani</h4>
                            <p>Kepala IT - Universitas Riau</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="bi bi-quote quote-icon"></i>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Migrasi dari provider lama ke GDS adalah keputusan terbaik. Bandwidth lebih besar, harga lebih murah, dan yang paling penting: tidak ada downtime!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">FN</div>
                        <div class="author-info">
                            <h4>Fajar Nugroho</h4>
                            <p>Direktur - PT Kreasi Digital Nusantara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-section">
        <div class="container">
            <h2 style="text-align: center; color: var(--gds-primary); font-size: 2rem; margin-bottom: 3rem;">Dipercaya oleh Banyak Perusahaan</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Klien Aktif</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Uptime SLA</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4.9/5</div>
                    <div class="stat-label">Rating Kepuasan</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support Available</div>
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
