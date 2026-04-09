<<nav class="main-nav" id="gds-navigation">
    <div class="nav-container">
        <div class="logo-section">
            <img src="{{ asset('logo_perusahaan.png') }}" alt="GDS Network Logo" class="logo-img">
        </div>

        <button class="mobile-toggle" id="mobileToggle">
            <i class="bi bi-list"></i>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('tim') }}">Tim Kami</a></li>

            <li class="dropdown-menu">
                <a href="#" class="dropdown-trigger">
                    Layanan <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('internet.dedicated') }}">Internet Dedicated</a></li>
                    <li><a href="{{ route('internet.broadband') }}">Internet Broadband</a></li>
                    <li><a href="{{ route('managed.network') }}">Managed Network</a></li>
                    <li><a href="{{ route('support.maintenance') }}">Support & Maintenance</a></li>
                </ul>
            </li>

            <li class="dropdown-menu">
                <a href="#" class="dropdown-trigger">
                    Informasi <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms') }}">Syarat & Ketentuan</a></li>
                    <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                </ul>
            </li>

            <li><a href="{{ route('home') }}#kontak">Kontak</a></li>
        </ul>
    </div>
</nav>

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

    .main-nav {
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
    }

    .nav-container {
        margin: 0 2.5rem;
        padding: 0.5rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-section {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .logo-img {
        height: 55px;
        width: auto;
        object-fit: contain;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }

    .nav-menu a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.95rem;
        position: relative;
        transition: color 0.3s ease;
    }

    .nav-menu a::before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--gds-accent);
        transition: width 0.3s ease;
    }

    .nav-menu a:hover {
        color: var(--gds-accent);
    }

    .nav-menu a:hover::before {
        width: 100%;
    }

    .mobile-toggle {
        display: none;
        background: none;
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        padding: 0.5rem;
    }

    .nav-menu > li {
        list-style: none;
        display: flex;
        align-items: center;
    }

    .dropdown-menu {
        position: relative;
        display: inline-block;
    }

    .dropdown-trigger {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        cursor: pointer;
    }

    .dropdown-trigger i {
        font-size: 0.75rem;
        transition: transform 0.3s ease;
    }

    .dropdown-menu:hover .dropdown-trigger i {
        transform: rotate(180deg);
    }

    .dropdown-content {
        position: absolute;
        top: 100%;
        left: 0;
        width: max-content;
        min-width: 220px;
        background: rgba(13, 17, 23, 0.98);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        list-style: none;
        padding: 0.5rem 0;
        margin: 0;
        margin-top: 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
    }

    .dropdown-menu:hover .dropdown-content {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-content li {
        margin: 0;
        list-style: none;
    }

    .dropdown-content a {
        display: block;
        padding: 0.75rem 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 400;
        transition: all 0.2s ease;
    }

    .dropdown-content a::before {
        display: none;
    }

    .dropdown-content a:hover {
        background: rgba(255, 64, 129, 0.1);
        color: var(--gds-accent);
        padding-left: 1.5rem;
    }

    /* ===================== MOBILE ===================== */
    @media (max-width: 992px) {
        .nav-container {
            margin: 0 1rem;
            padding: 0.5rem 1rem;
        }

        .nav-menu {
            position: fixed;
            top: 70px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 70px);
            background: rgba(13, 17, 23, 0.98);
            flex-direction: column;
            padding: 1.5rem;
            gap: 0;
            transition: left 0.3s ease;
            overflow-y: auto;
        }

        .nav-menu.active {
            left: 0;
        }

        .mobile-toggle {
            display: block;
        }

        .nav-menu > li {
            width: 100%;
            display: block;
        }

        .nav-menu > li > a {
            display: block;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Reset dropdown untuk mobile */
        .dropdown-menu {
            width: 100%;
            position: relative;
        }

        .dropdown-trigger {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Override semua CSS desktop untuk mobile */
        .dropdown-content {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            width: 100%;
            min-width: unset;
            margin: 0;
            background: rgba(255, 255, 255, 0.05);
            border: none;
            box-shadow: none;
            border-radius: 0;
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        /* Sembunyikan saat hover di mobile */
        .dropdown-menu:hover .dropdown-content {
            max-height: 0;
        }

        /* Tampilkan saat active */
        .dropdown-menu.active .dropdown-content {
            max-height: 500px;
        }

        /* Rotate icon saat active */
        .dropdown-menu.active .dropdown-trigger i {
            transform: rotate(180deg);
        }

        /* Item di dalam dropdown */
        .dropdown-content li {
            width: 100%;
            margin: 0;
        }

        .dropdown-content a {
            padding: 0.75rem 0 0.75rem 1.5rem;
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.9rem;
        }

        .dropdown-content a:hover {
            padding-left: 2rem;
            background: rgba(255, 64, 129, 0.1);
        }

        .dropdown-content li:last-child a {
            border-bottom: none;
        }
    }

    @media (max-width: 576px) {
        .logo-img {
            height: 45px;
        }

        .nav-container {
            margin: 0 0.5rem;
            padding: 0.5rem 0.75rem;
        }

        .nav-menu {
            padding: 1rem;
        }
    }
</style>