<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDS - Globalriau Data Solusi | Jaringan Internet Bisnis Terpercaya</title>
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
            display: block;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #2c3e50;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .hero-area {
            min-height: 100vh;
            background: var(--gds-dark);
            position: relative;
            display: flex;
            align-items: center;
            padding-top: 80px;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(0, 71, 171, 0.2) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(233, 30, 99, 0.15) 0%, transparent 50%);
        }

        .hero-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(255, 64, 129, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 64, 129, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(50px, 50px);
            }
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .hero-main {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .hero-text .highlight {
            background: var(--gds-gradient-alt);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-text .subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        .hero-actions {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: var(--gds-gradient);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 10px 30px rgba(233, 30, 99, 0.3);
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(233, 30, 99, 0.4);
        }

        .btn-hero-secondary {
            background: transparent;
            color: white;
            padding: 1rem 2.5rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-hero-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--gds-accent);
            color: var(--gds-accent);
        }

        .hero-visual {
            position: relative;
            height: 500px;
        }

        .connection-hub {
            width: 120px;
            height: 120px;
            background: var(--gds-gradient);
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 60px rgba(233, 30, 99, 0.6);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(-50%, -50%) translateY(0);
            }

            50% {
                transform: translate(-50%, -50%) translateY(-20px);
            }
        }

        .connection-hub i {
            font-size: 3rem;
            color: white;
        }

        .orbit-node {
            width: 60px;
            height: 60px;
            background: rgba(255, 64, 129, 0.2);
            border: 2px solid var(--gds-accent);
            border-radius: 50%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: orbit 8s linear infinite;
        }

        .orbit-node i {
            color: var(--gds-accent);
            font-size: 1.5rem;
        }

        .orbit-node:nth-child(2) {
            top: 10%;
            left: 50%;
            animation-delay: 0s;
        }

        .orbit-node:nth-child(3) {
            top: 50%;
            right: 10%;
            animation-delay: 2s;
        }

        .orbit-node:nth-child(4) {
            bottom: 10%;
            left: 50%;
            animation-delay: 4s;
        }

        .orbit-node:nth-child(5) {
            top: 50%;
            left: 10%;
            animation-delay: 6s;
        }

        @keyframes orbit {
            0% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 0.6;
            }
        }

        .about-section {
            padding: 6rem 0;
            background: white;
        }

        .section-header {
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
            font-size: 2.8rem;
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

        .about-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .about-content h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: var(--gds-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .about-content p {
            font-size: 1.05rem;
            color: #475569;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-box {
            text-align: center;
            padding: 1.5rem;
            background: var(--gds-light);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--gds-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.95rem;
            color: #64748b;
            font-weight: 500;
        }

        .about-image {
            position: relative;
            height: 450px;
        }

        .image-card {
            position: absolute;
            background: var(--gds-gradient);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .image-card.large {
            width: 70%;
            height: 70%;
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-card.large i {
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.3);
        }

        .image-card.small {
            width: 50%;
            height: 35%;
            bottom: 0;
            left: 0;
            background: white;
            border: 2px solid var(--gds-accent);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .image-card.small i {
            font-size: 2.5rem;
            color: var(--gds-accent);
            margin-bottom: 0.5rem;
        }

        .image-card.small .card-text {
            font-weight: 700;
            color: var(--gds-dark);
            font-size: 1.1rem;
        }

        .team-section {
            padding: 5rem 0;
            background: var(--gds-dark);
            position: relative;
            overflow: hidden;
        }

        .team-section .section-tag,
        .team-section .section-title,
        .team-section .section-desc {
            color: white;
        }

        .team-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .team-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 51, 204, 0.15);
            border-color: rgba(255, 64, 129, 0.3);
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
        }

        .team-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
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
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 17px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .team-social a:hover {
            background: #fff;
            color: var(--gds-primary);
            transform: translateY(-3px);
        }

        .team-info {
            padding: 1.5rem 1.5rem 2rem;
            text-align: center;
            background: #fff;
            position: relative;
            z-index: 2;
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

        .team-cta {
            text-align: center;
            margin-top: 4rem;
        }

        .btn-team {
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
        }

        .btn-team:hover {
            transform: translateY(-2px);
        }

        .btn-team i {
            transition: transform 0.3s ease;
        }

        .btn-team:hover i {
            transform: translateX(5px);
        }

        .services-section {
            padding: 6rem 0;
            background: var(--gds-light);
        }

        .services-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-item {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gds-gradient);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            border-color: var(--gds-accent);
        }

        .service-item:hover::before {
            transform: scaleX(1);
        }

        .service-icon-wrapper {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(255, 64, 129, 0.1), rgba(0, 71, 171, 0.1));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
        }

        .service-item:hover .service-icon-wrapper {
            background: var(--gds-gradient);
        }

        .service-icon-wrapper i {
            font-size: 2rem;
            color: var(--gds-primary);
            transition: color 0.4s ease;
        }

        .service-item:hover .service-icon-wrapper i {
            color: white;
        }

        .service-item h4 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--gds-dark);
            margin-bottom: 1rem;
        }

        .service-item p {
            color: #64748b;
            line-height: 1.7;
        }

        .features-section {
            padding: 6rem 0;
            background: var(--gds-dark);
            position: relative;
            overflow: hidden;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .features-section .section-tag,
        .features-section .section-title {
            color: white;
        }

        .features-section .section-desc {
            color: rgba(255, 255, 255, 0.7);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2.5rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            border-color: var(--gds-accent);
        }

        .feature-icon-box {
            width: 90px;
            height: 90px;
            background: rgba(255, 64, 129, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            border: 2px solid rgba(255, 64, 129, 0.3);
            transition: all 0.4s ease;
        }

        .feature-card:hover .feature-icon-box {
            background: var(--gds-gradient);
            border-color: var(--gds-accent);
            transform: rotate(360deg);
        }

        .feature-icon-box i {
            font-size: 2.5rem;
            color: var(--gds-accent);
            transition: color 0.4s ease;
        }

        .feature-card:hover .feature-icon-box i {
            color: white;
        }

        .feature-card h5 {
            font-size: 1.3rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
        }

        .partners-section {
            padding: 6rem 0;
            background: var(--gds-light);
            overflow: hidden;
        }

        .partners-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .partners-wrapper {
            margin-top: 4rem;
            position: relative;
            overflow: hidden;
            padding: 2.5rem 0;
        }

        .partners-wrapper::before,
        .partners-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            width: 200px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .partners-wrapper::before {
            left: 0;
            background: linear-gradient(to right, var(--gds-light) 0%, transparent 100%);
        }

        .partners-wrapper::after {
            right: 0;
            background: linear-gradient(to left, var(--gds-light) 0%, transparent 100%);
        }

        .partners-track {
            display: flex;
            gap: 3rem;
            animation: scroll 45s linear infinite;
            width: fit-content;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .partner-logo {
            flex-shrink: 0;
            width: 200px;
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 16px;
            padding: 1.8rem;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            border: 1px solid rgba(0, 51, 204, 0.06);
        }

        .partner-logo:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 51, 204, 0.15);
            border-color: var(--gds-accent);
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(100%) opacity(0.5);
            transition: filter 0.4s ease;
        }

        .partner-logo:hover img {
            filter: grayscale(0%) opacity(1);
        }

        .partners-track:hover {
            animation-play-state: paused;
        }

        .contact-section {
            padding: 6rem 0;
            background: white;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            background: var(--gds-light);
            border-radius: 30px;
            overflow: hidden;
        }

        .contact-info {
            background: var(--gds-gradient);
            padding: 4rem 3rem;
            color: white;
        }

        .contact-info h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .contact-info p {
            opacity: 0.9;
            margin-bottom: 3rem;
            line-height: 1.7;
        }

        .contact-detail {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            align-items: flex-start;
        }

        .contact-detail-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-detail-icon i {
            font-size: 1.5rem;
        }

        .contact-detail-text h6 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .contact-detail-text p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .contact-detail-text a {
            color: white;
            text-decoration: none;
        }

        .contact-cards {
            padding: 4rem 3rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .quick-contact-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .quick-contact-card:hover {
            transform: translateY(-5px);
            border-color: var(--gds-accent);
        }

        .quick-contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(255, 64, 129, 0.1), rgba(0, 71, 171, 0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .quick-contact-icon i {
            font-size: 1.8rem;
            color: var(--gds-primary);
        }

        .quick-contact-card h6 {
            font-weight: 700;
            color: var(--gds-dark);
            margin-bottom: 0.5rem;
        }

        .quick-contact-card a {
            color: var(--gds-accent);
            text-decoration: none;
            font-weight: 600;
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
            .hero-main {
                grid-template-columns: 1fr;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-visual {
                height: 350px;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            /* Stats tetap 3 kolom di tablet */
            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
            }

            .stat-box {
                padding: 1rem;
            }

            .stat-number {
                font-size: 1.8rem;
            }

            .stat-label {
                font-size: 0.8rem;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
            }

            /* Contact cards jadi 2 kolom di tablet */
            .contact-cards {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
                padding: 3rem 2rem;
            }

            .footer-top {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
            }

            .partner-logo {
                width: 160px;
                height: 90px;
                padding: 1.3rem;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-actions {
                flex-direction: column;
            }

            .btn-hero-primary,
            .btn-hero-secondary {
                width: 100%;
                justify-content: center;
            }

            /* Stats TETAP 3 kolom di mobile dengan ukuran lebih kecil */
            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.75rem;
            }

            .stat-box {
                padding: 0.75rem 0.5rem;
            }

            .stat-number {
                font-size: 1.5rem;
            }

            .stat-label {
                font-size: 0.7rem;
                line-height: 1.3;
            }

            .section-title {
                font-size: 2rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .partner-logo {
                width: 140px;
                height: 80px;
                padding: 1rem;
            }

            /* Contact cards TETAP 2 kolom di mobile */
            .contact-cards {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
                padding: 2rem 1rem;
            }

            .quick-contact-card {
                padding: 1.25rem 1rem;
            }

            .quick-contact-icon {
                width: 45px;
                height: 45px;
                margin-bottom: 0.75rem;
            }

            .quick-contact-icon i {
                font-size: 1.4rem;
            }

            .quick-contact-card h6 {
                font-size: 0.85rem;
                margin-bottom: 0.4rem;
            }

            .quick-contact-card a {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    @include('navigasi')
<script src="nav-init.js"></script>

    <!-- Hero Section -->
    <section id="home" class="hero-area">
        <div class="hero-background"></div>
        <div class="hero-grid"></div>
        <div class="hero-content">
            <div class="hero-main">
                <div class="hero-text">
                    <h1>Infrastruktur Jaringan <span class="highlight">Modern</span> untuk Era Digital</h1>
                    <p class="subtitle">Wujudkan konektivitas tanpa batas dengan solusi internet dedicated, broadband,
                        dan managed network yang dirancang khusus untuk kebutuhan bisnis Anda</p>
                    <div class="hero-actions">
                        <a href="https://wa.me/6281234567890?text=Halo%20GDS%2C%20saya%20ingin%20konsultasi%20tentang%20layanan%20internet"
                            class="btn-hero-primary" target="_blank"><i class="bi bi-telephone-fill"></i> Konsultasi
                            Gratis</a>
                        <a href="#layanan" class="btn-hero-secondary"><i class="bi bi-grid-3x3-gap-fill"></i> Lihat
                            Layanan</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="connection-hub"><i class="bi bi-broadcast-pin"></i></div>
                    <div class="orbit-node"><i class="bi bi-laptop"></i></div>
                    <div class="orbit-node"><i class="bi bi-phone"></i></div>
                    <div class="orbit-node"><i class="bi bi-server"></i></div>
                    <div class="orbit-node"><i class="bi bi-globe"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h2 class="section-title">Partner Teknologi Jaringan Terpercaya</h2>
                <p class="section-desc">Membangun fondasi digital yang kuat untuk kesuksesan bisnis Anda</p>
            </div>
            <div class="about-grid">
                <div class="about-content">
                    <h3>Globalriau Data Solusi</h3>
                    <p>Kami adalah perusahaan penyedia solusi jaringan internet yang berkomitmen menghadirkan
                        infrastruktur teknologi informasi berkualitas tinggi untuk berbagai skala bisnis. Dengan
                        pengalaman mendalam dalam industri telekomunikasi, kami memahami bahwa setiap bisnis memiliki
                        kebutuhan konektivitas yang unik.</p>
                    <p>GDS hadir dengan pendekatan yang personal dan solusi yang dapat disesuaikan, memastikan setiap
                        klien mendapatkan layanan optimal yang mendukung produktivitas dan pertumbuhan bisnis mereka di
                        era transformasi digital ini.</p>
                    <div class="stats-grid">
                        <div class="stat-box">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Klien Korporat</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">99.9%</div>
                            <div class="stat-label">Network Uptime</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Technical Support</div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-card large"><i class="bi bi-bezier2"></i></div>
                    <div class="image-card small"><i class="bi bi-shield-check"></i><span class="card-text">Certified
                            Provider</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="tim" class="team-section">
        <div class="team-container">
            <div class="section-header">
                <div class="section-tag">Tim Kami</div>
                <h2 class="section-title">Profesional Berpengalaman</h2>
                <p class="section-desc">Didukung oleh engineer bersertifikasi internasional dengan dedikasi penuh
                    terhadap excellence dalam setiap solusi yang kami berikan</p>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image"><img
                                src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop"
                                alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social"><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i
                                            class="bi bi-envelope-fill"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Network Solutions Director</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image"><img
                                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop"
                                alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social"><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i
                                            class="bi bi-envelope-fill"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Senior Network Engineer</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image"><img
                                src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop"
                                alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social"><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i
                                            class="bi bi-envelope-fill"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Technical Support Manager</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <div class="team-image"><img
                                src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop"
                                alt="Anonymous">
                            <div class="team-overlay">
                                <div class="team-social"><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i
                                            class="bi bi-envelope-fill"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Anonymous</h4>
                        <p>Infrastructure Specialist</p>
                    </div>
                </div>
            </div>
            <div class="team-cta"><a href="{{ route('tim') }}" class="btn-team"><span>Lihat Seluruh Tim</span>
            <i class="bi bi-arrow-right"></i></a></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="services-section">
        <div class="services-container">
            <div class="section-header">
                <div class="section-tag">Layanan Kami</div>
                <h2 class="section-title">Solusi Konektivitas Lengkap</h2>
                <p class="section-desc">Berbagai pilihan layanan internet yang dirancang untuk mendukung operasional
                    bisnis Anda</p>
            </div>
            <div class="services-grid">
                <a href="{{ route('internet.dedicated') }}" class="service-item">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-hdd-network-fill"></i>
                    </div>
                    <h4>Internet Dedicated</h4>
                    <p>
                        Koneksi internet eksklusif dengan bandwidth penuh yang dialokasikan khusus untuk bisnis Anda,
                        menjamin kecepatan stabil dan performa maksimal tanpa gangguan.
                    </p>
                </a>

                <a href="{{ route('internet.broadband') }}" class="service-item">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-reception-4"></i>
                    </div>
                    <h4>Internet Broadband</h4>
                    <p>
                        Solusi internet berkecepatan tinggi dengan harga kompetitif, ideal untuk kebutuhan kantor, UKM,
                        dan bisnis yang membutuhkan konektivitas reliable dengan budget efisien.
                    </p>
                </a>

                <a href="{{ route('managed.network') }}" class="service-item">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <h4>Managed Network</h4>
                    <p>
                        Layanan pengelolaan infrastruktur jaringan secara menyeluruh oleh tim engineer profesional kami,
                        membebaskan Anda fokus pada core business tanpa khawatir masalah teknis.
                    </p>
                </a>

                <a href="{{ route('support.maintenance') }}" class="service-item">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h4>Support & Maintenance</h4>
                    <p>
                        Dukungan teknis responsif 24/7 dan maintenance rutin untuk memastikan sistem jaringan Anda selalu
                        dalam kondisi prima dan siap mendukung operasional bisnis.
                    </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="keunggulan" class="features-section">
        <div class="features-container">
            <div class="section-header">
                <div class="section-tag">Keunggulan GDS</div>
                <h2 class="section-title">Mengapa Memilih Kami?</h2>
                <p class="section-desc">Komitmen kami terhadap kualitas dan kepuasan klien</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-speedometer2"></i></div>
                    <h5>Koneksi Stabil</h5>
                    <p>Infrastruktur jaringan backbone Tier-1 dengan SLA uptime 99.9%, menjamin konektivitas yang
                        konsisten untuk operasional bisnis tanpa gangguan</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-headset"></i></div>
                    <h5>Support 24/7</h5>
                    <p>Tim technical support yang selalu siaga setiap saat melalui berbagai channel komunikasi untuk
                        merespon setiap kebutuhan Anda dengan cepat</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-cpu-fill"></i></div>
                    <h5>Teknologi Modern</h5>
                    <p>Perangkat networking terkini dari vendor global terpercaya dengan update berkala untuk menjamin
                        performa dan keamanan optimal</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-people-fill"></i></div>
                    <h5>Tim Profesional</h5>
                    <p>Engineer bersertifikasi internasional dengan pengalaman puluhan tahun dalam mendesain dan
                        mengelola infrastruktur jaringan enterprise</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="partners-section">
        <div class="partners-container">
            <div class="section-header">
                <div class="section-tag">Dipercaya Oleh</div>
                <h2 class="section-title">Partner Korporat Kami</h2>
                <p class="section-desc">Melayani perusahaan terkemuka di berbagai industri dengan standar kualitas
                    tertinggi</p>
            </div>
            <div class="partners-wrapper">
                <div class="partners-track">
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/microsoft-6.svg"
                            alt="Microsoft"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/apple-13.svg" alt="Apple">
                    </div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/bank-mandiri.svg"
                            alt="Bank Mandiri"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/linux-tux.svg"
                            alt="Linux"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/xbox-9.svg" alt="Xbox">
                    </div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/unilever-2.svg"
                            alt="Unilever"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/rockstar-games.svg"
                            alt="Rockstar Games"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/asus-rog-1-1.svg"
                            alt="Asus ROG"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/microsoft-6.svg"
                            alt="Microsoft"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/apple-13.svg" alt="Apple">
                    </div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/bank-mandiri.svg"
                            alt="Bank Mandiri"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/linux-tux.svg"
                            alt="Linux"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/xbox-9.svg" alt="Xbox">
                    </div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/unilever-2.svg"
                            alt="Unilever"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/rockstar-games.svg"
                            alt="Rockstar Games"></div>
                    <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/asus-rog-1-1.svg"
                            alt="Asus ROG"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="contact-section">
        <div class="contact-container">
            <div class="section-header">
                <div class="section-tag">Hubungi Kami</div>
                <h2 class="section-title">Mari Wujudkan Konektivitas Terbaik</h2>
                <p class="section-desc">Tim kami siap membantu Anda menemukan solusi internet yang tepat</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <p>Jangan ragu untuk menghubungi kami. Tim profesional kami siap memberikan konsultasi dan solusi
                        terbaik untuk kebutuhan jaringan bisnis Anda.</p>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="contact-detail-text">
                            <h6>Alamat Kantor</h6>
                            <p>Jl. Riau Technology Park No. 123<br>Pekanbaru, Riau 28292<br>Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div class="contact-detail-text">
                            <h6>Telepon</h6>
                            <p><a href="tel:+62761123456">+62 761-123-456</a></p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div class="contact-detail-text">
                            <h6>Email</h6>
                            <p><a href="/cdn-cgi/l/email-protection#96fff8f0f9d6f1faf9f4f7fae4fff7e3b8f5f9fb"><span class="__cf_email__" data-cfemail="95fcfbf3fad5f2f9faf7f4f9e7fcf4e0bbf6faf8">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="contact-cards">
                    <div class="quick-contact-card">
                        <div class="quick-contact-icon"><i class="bi bi-whatsapp"></i></div>
                        <h6>WhatsApp Sales</h6><a href="https://wa.me/6281234567890" target="_blank">+62
                            812-3456-7890</a>
                    </div>
                    <div class="quick-contact-card">
                        <div class="quick-contact-icon"><i class="bi bi-whatsapp"></i></div>
                        <h6>WhatsApp Support</h6><a href="https://wa.me/6281234567891" target="_blank">+62
                            812-3456-7891</a>
                    </div>
                    <div class="quick-contact-card">
                        <div class="quick-contact-icon"><i class="bi bi-envelope-at-fill"></i></div>
                        <h6>Email Sales</h6><a href="/cdn-cgi/l/email-protection#c8bba9a4adbb88afa4a7aaa9a4baa1a9bde6aba7a5"><span class="__cf_email__" data-cfemail="9ceffdf0f9efdcfbf0f3fefdf0eef5fde9b2fff3f1">[email&#160;protected]</span></a>
                    </div>
                    <div class="quick-contact-card">
                        <div class="quick-contact-icon"><i class="bi bi-life-preserver"></i></div>
                        <h6>Technical Support</h6><a href="/cdn-cgi/l/email-protection#3a494f4a4a55484e7a5d5655585b5648535b4f14595557"><span class="__cf_email__" data-cfemail="65161015150a17112502090a070409170c04104b060a08">[email&#160;protected]</span></a>
                    </div>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    var target = document.querySelector(this.getAttribute('href'));
                    if (target) target.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });
    </script>

</body>

</html>