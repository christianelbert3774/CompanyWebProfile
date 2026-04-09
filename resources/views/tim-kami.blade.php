<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kami - GDS Globalriau Data Solusi</title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --gds-primary: #0033CC;
            --gds-secondary: #FF0000;
            --gds-accent: #FF4081;
            --gds-dark: #0d1117;
            --gds-light: #eceff1;
            --gds-gradient: linear-gradient(120deg, #0033CC 0%, #FF0000 100%);
            --gds-gradient-alt: linear-gradient(135deg, #0033CC 0%, #9C27B0 50%, #FF0000 100%);
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

        .team-full-section {
            padding: 6rem 0;
            background: var(--gds-light);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-intro {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-tag {
            color: var(--gds-accent);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gds-dark);
            margin-bottom: 1rem;
        }

        .section-desc {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 700px;
            margin: 0 auto;
        }

        /* === TEAM GRID === */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
            align-items: stretch;
        }

        .team-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
            border: 2px solid transparent;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,51,204,0.03) 0%, rgba(255,64,129,0.03) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
            pointer-events: none;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 51, 204, 0.15);
            border-color: rgba(255, 64, 129, 0.3);
        }

        .team-card:hover::before {
            opacity: 1;
        }

        .team-image-wrapper {
            padding: 1.5rem 1.5rem 0;
            position: relative;
            z-index: 2;
        }

        .team-image {
            position: relative;
            overflow: hidden;
            padding-top: 100%;
            border-radius: 16px;
            background: var(--gds-light);
            border: 3px solid rgba(0, 51, 204, 0.08);
            transition: border-color 0.4s ease;
        }

        .team-card:hover .team-image {
            border-color: rgba(255, 64, 129, 0.4);
        }

        .team-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);
        }

        .team-card:hover .team-image img {
            transform: scale(1.08);
        }

        .team-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 51, 204, 0.95) 100%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .team-card:hover .team-overlay {
            opacity: 1;
        }

        .team-social {
            display: flex;
            gap: 10px;
        }

        .team-social a {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 17px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.25);
            text-decoration: none;
        }

        .team-social a:hover {
            background: #ffffff;
            color: var(--gds-primary);
            transform: translateY(-3px);
            border-color: #ffffff;
        }

        .team-info {
            padding: 1.5rem 1.5rem 2rem;
            text-align: center;
            background: #ffffff;
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .team-info h4 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--gds-dark);
            margin-bottom: 0.4rem;
        }

        .team-info p {
            font-size: 0.95rem;
            color: #64748b;
            font-weight: 500;
        }

        /* === BACK TO HOME SECTION === */
        .back-section {
            text-align: center;
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 1px solid rgba(0, 51, 204, 0.1);
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 1rem 2.5rem;
            background: var(--gds-gradient);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 51, 204, 0.2);
        }

        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 51, 204, 0.3);
        }

        .btn-back i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .btn-back:hover i {
            transform: translateX(-5px);
        }

        /* === RESPONSIVE === */
        @media (max-width: 992px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .page-header h1 i {
                font-size: 2rem;
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .team-full-section {
                padding: 4rem 0;
            }
        }

        @media (max-width: 576px) {
            .page-header {
                padding: 120px 0 60px;
            }

            .page-header h1 {
                font-size: 2rem;
                flex-direction: column;
                gap: 0.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .team-grid {
                grid-template-columns: repeat(1, 1fr);
                gap: 1.5rem;
            }

            .team-card {
                max-width: 100%;
                margin: 0;
            }

            .team-image-wrapper {
                padding: 1.2rem 1.2rem 0;
            }

            .team-info {
                padding: 1.2rem 1.2rem 1.8rem;
            }

            .btn-back {
                padding: 0.9rem 2rem;
                font-size: 0.95rem;
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
    <!-- <script src="nav-init.js"></script> -->
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-content">
            <h1>
                <i class="bi bi-people-fill"></i>
                Tim Kami
            </h1>
            <p>Profesional berpengalaman yang siap memberikan solusi terbaik untuk bisnis Anda</p>
        </div>
    </div>

    <!-- Team Full Section -->
    <section class="team-full-section">
        <div class="container">
            <div class="section-intro">
                <!-- <div class="section-tag">Keahlian & Dedikasi</div> -->
                <h2 class="section-title">Bertemu dengan Tim Profesional Kami</h2>
                <p class="section-desc">Didukung oleh engineer bersertifikasi internasional dengan pengalaman puluhan tahun dalam industri telekomunikasi dan jaringan</p>
            </div>

            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Network Solutions Director</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Senior Network Engineer</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Technical Support Manager</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Infrastructure Specialist</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Chief Technology Officer</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Customer Success Manager</p>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Security Specialist</p>
                    </div>
                </div>

                <!-- Team Member 8 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Cloud Solutions Architect</p>
                    </div>
                </div>

                <!-- Team Member 9 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Network Operations Lead</p>
                    </div>
                </div>

                <!-- Team Member 10 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Project Manager</p>
                    </div>
                </div>

                <!-- Team Member 11 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Systems Administrator</p>
                    </div>
                </div>

                <!-- Team Member 12 -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=400&h=400&fit=crop" alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>DevOps Engineer</p>
                    </div>
                </div>
            </div>

            <div class="back-section">
                <a href="{{ route('home') }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i>
                    <span>Kembali ke Beranda</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- JavaScript untuk load navigasi -->
    <div id="nav-placeholder"></div>

<script src="nav-init.js"></script>
</body>
</html>
