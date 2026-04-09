<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support & Maintenance - GDS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gds-primary: #0047AB;
            --gds-secondary: #E91E63;
            --gds-accent: #FF4081;
            --gds-dark: #0d1117;
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
            line-height: 1.6;
        }
        
        .support-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 2rem; 
            margin: 3rem 0; 
        }
        
        .support-card { 
            background: #eceff1; 
            padding: 2rem; 
            border-radius: 15px; 
            text-align: center; 
        }
        
        .support-icon { 
            width: 80px; 
            height: 80px; 
            background: var(--gds-gradient); 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin: 0 auto 1rem; 
        }
        
        .support-icon i { 
            font-size: 2.5rem; 
            color: white; 
        }
        
        .btn-cta { 
            background: var(--gds-gradient); 
            color: white; 
            padding: 1rem 2rem; 
            border-radius: 10px; 
            text-decoration: none; 
            display: inline-block; 
        }

        /* Tabel Responsif */
        .table-responsive {
            margin: 1rem 0;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .table-responsive table {
            width: 100%;
        }

        .sla-table {
            width: 100%; 
            border-collapse: collapse;
        }

        .sla-table thead tr {
            background: var(--gds-gradient); 
            color: white;
        }

        .sla-table th {
            padding: 1rem; 
            text-align: center;
            font-weight: 600;
        }

        .sla-table td {
            padding: 1rem; 
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .sla-table tbody tr:last-child td {
            border-bottom: none;
        }

        .sla-table tbody tr:hover {
            background-color: #f8f9fa;
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

        /* Media Queries untuk Mobile */
        @media (max-width: 768px) {
            .page-header {
                padding: 80px 0 40px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 0.95rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .support-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .container {
                padding: 0 1rem;
            }

            /* Tabel langsung fit tanpa scroll */
            .sla-table {
                font-size: 0.75rem;
            }

            .sla-table th {
                padding: 0.6rem 0.3rem;
                font-size: 0.7rem;
                line-height: 1.3;
            }

            .sla-table td {
                padding: 0.6rem 0.3rem;
                font-size: 0.75rem;
                line-height: 1.4;
            }

            .sla-table strong {
                font-size: 0.8rem;
            }

            .btn-cta {
                padding: 0.85rem 1.5rem;
                font-size: 0.9rem;
                margin: 0.5rem;
            }

            .feature-box {
                padding: 1.5rem;
            }

            .feature-box ul {
                padding-left: 1.2rem;
            }

            .feature-box li {
                font-size: 0.95rem;
                margin-bottom: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .page-header h1 {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 1.35rem;
            }

            .sla-table {
                font-size: 0.7rem;
            }

            .sla-table th {
                padding: 0.5rem 0.25rem;
                font-size: 0.65rem;
                line-height: 1.2;
            }

            .sla-table td {
                padding: 0.5rem 0.25rem;
                font-size: 0.7rem;
                line-height: 1.3;
            }

            .sla-table strong {
                font-size: 0.75rem;
            }

            .support-icon {
                width: 65px;
                height: 65px;
            }

            .support-icon i {
                font-size: 2rem;
            }

            .support-card h4 {
                font-size: 1.1rem;
            }

            .support-card p {
                font-size: 0.9rem;
            }
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
        <h1><i class="bi bi-tools"></i> Support & Maintenance</h1>
        <p>Dukungan Teknis Profesional 24/7</p>
    </div>

    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Layanan Support Kami</h2>
            <div class="support-grid">
                <div class="support-card">
                    <div class="support-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h4>Hotline 24/7</h4>
                    <p>Tim support siap membantu Anda kapan saja melalui telepon</p>
                </div>
                <div class="support-card">
                    <div class="support-icon">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <h4>Live Chat</h4>
                    <p>Chat langsung dengan technical support untuk solusi cepat</p>
                </div>
                <div class="support-card">
                    <div class="support-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h4>WhatsApp Support</h4>
                    <p>Hubungi kami via WhatsApp untuk bantuan instan</p>
                </div>
                <div class="support-card">
                    <div class="support-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h4>Email Support</h4>
                    <p>Kirim ticket support via email, kami respon maksimal 1 jam</p>
                </div>
            </div>

            <h2 class="section-title">Layanan Maintenance</h2>
            <div class="feature-box">
                <h4>Preventive Maintenance</h4>
                <ul>
                    <li>Regular health check perangkat jaringan</li>
                    <li>Firmware & software update</li>
                    <li>Configuration backup berkala</li>
                    <li>Performance optimization</li>
                    <li>Security patch & vulnerability scan</li>
                </ul>
            </div>

            <div class="feature-box">
                <h4>Corrective Maintenance</h4>
                <ul>
                    <li>Troubleshooting & problem solving</li>
                    <li>Hardware replacement (jika diperlukan)</li>
                    <li>Network recovery & restoration</li>
                    <li>Root cause analysis</li>
                </ul>
            </div>

            <h2 class="section-title">SLA & Response Time</h2>
            <div class="feature-box">
                <div class="table-responsive">
                    <table class="sla-table">
                        <thead>
                            <tr>
                                <th>Priority</th>
                                <th>Description</th>
                                <th>Response Time</th>
                                <th>Resolution Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Critical</strong></td>
                                <td>Network down, total outage</td>
                                <td>15 menit</td>
                                <td>2 jam</td>
                            </tr>
                            <tr>
                                <td><strong>High</strong></td>
                                <td>Severe performance issue</td>
                                <td>30 menit</td>
                                <td>4 jam</td>
                            </tr>
                            <tr>
                                <td><strong>Medium</strong></td>
                                <td>Minor issue, workaround available</td>
                                <td>2 jam</td>
                                <td>8 jam</td>
                            </tr>
                            <tr>
                                <td><strong>Low</strong></td>
                                <td>General inquiry, consultation</td>
                                <td>4 jam</td>
                                <td>24 jam</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="text-align: center; margin: 4rem 0;">
                <h3>Butuh Bantuan Sekarang?</h3>
                <p style="font-size: 1.1rem; color: #64748b; margin: 1rem 0;">Tim support kami siap membantu Anda</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://wa.me/6281234567891?text=Halo%20GDS%20Support%2C%20saya%20butuh%20bantuan" class="btn-cta" target="_blank">
                        <i class="bi bi-whatsapp"></i> WhatsApp Support
                    </a>
                    <a href="tel:+62761123456" class="btn-cta">
                        <i class="bi bi-telephone-fill"></i> Call Support
                    </a>
                    <a href="mailto:support@globalriau.com" class="btn-cta">
                        <i class="bi bi-envelope-fill"></i> Email Support
                    </a>
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

</body>
</html>