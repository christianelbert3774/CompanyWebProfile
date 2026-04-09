// nav-init.js — Handle navigasi dengan dropdown mobile
(function () {
    function initNav() {
        var mobileToggle  = document.getElementById('mobileToggle');
        var navMenu       = document.getElementById('navMenu');
        var dropdownMenus = document.querySelectorAll('#gds-navigation .dropdown-menu');

        if (!mobileToggle || !navMenu) return;

        /* 1. Hamburger buka/tutup menu */
        mobileToggle.addEventListener('click', function () {
            var isOpen = navMenu.classList.toggle('active');
            mobileToggle.querySelector('i').className = isOpen ? 'bi bi-x' : 'bi bi-list';

            // Tutup semua dropdown saat hamburger menu ditutup
            if (!isOpen) {
                dropdownMenus.forEach(function (m) { m.classList.remove('active'); });
            }
        });

        /* 2. Dropdown */
        dropdownMenus.forEach(function (menu) {
            var trigger = menu.querySelector('.dropdown-trigger');
            if (!trigger) return;

            trigger.addEventListener('click', function (e) {
                // Desktop: CSS hover 
                if (window.innerWidth > 992) return;

                e.preventDefault();
                e.stopPropagation();

                // Tutup semua dropdown lain
                dropdownMenus.forEach(function (m) {
                    if (m !== menu) {
                        m.classList.remove('active');
                    }
                });

                // Toggle dropdown yang diklik
                menu.classList.toggle('active');
            });
        });

        /* 3. Tutup saat tap di luar navigasi */
        document.addEventListener('click', function (e) {
            if (!e.target.closest('#gds-navigation')) {
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').className = 'bi bi-list';
                dropdownMenus.forEach(function (m) { m.classList.remove('active'); });
            }
        });

        /* 4. Reset saat resize ke desktop */
        var resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                if (window.innerWidth > 992) {
                    navMenu.classList.remove('active');
                    mobileToggle.querySelector('i').className = 'bi bi-list';
                    dropdownMenus.forEach(function (m) { m.classList.remove('active'); });
                }
            }, 250);
        });
    }

    // Jalankan setelah DOM selesai dimuat
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNav);
    } else {
        // DOM sudah siap (script dipanggil di akhir body)
        initNav();
    }
})();