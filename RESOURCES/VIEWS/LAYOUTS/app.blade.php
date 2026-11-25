
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Gray Brew Coffee Shop')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    @stack('styles')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #F2F2F2;
            color: #292929;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* NAVIGATION */

        .navbar {
            background: #FFFFFF;
            padding: 18px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,.06);
        }

        .logo {
            font-size: 23px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .logo span {
            color: #A68A64;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 35px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #A68A64;
        }

        .nav-contact {
            background: #292929;
            color: white !important;
            padding: 11px 23px;
            border-radius: 30px;
        }

        .nav-contact:hover {
            background: #A68A64;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 25px;
            cursor: pointer;
        }

        /* FOOTER */

        .footer {
            background: #252525;
            color: white;
            padding: 55px 7% 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 45px;
            padding-bottom: 35px;
        }

        .footer h3 {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            margin-bottom: 15px;
        }

        .footer h4 {
            margin-bottom: 15px;
            color: #FFFFFF;
        }

        .footer p,
        .footer a {
            color: #BBBBBB;
            font-size: 13px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .footer a:hover {
            color: #A68A64;
        }

        .footer-members {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            color: #AAAAAA;
            font-size: 12px;
        }

        @media(max-width: 768px) {

            .navbar {
                padding: 16px 5%;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 65px;
                left: 0;
                width: 100%;
                background: white;
                padding: 25px;
                flex-direction: column;
                gap: 22px;
            }

            .nav-links.show {
                display: flex;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- MASTER NAVIGATION BAR -->

    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">
            GRAY <span>BREW.</span>
        </a>

        <button class="menu-toggle"
                id="menuToggle"
                aria-label="Toggle navigation"
                aria-expanded="false">
            ☰
        </button>

        <ul class="nav-links" id="navLinks">

            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}"
                   class="nav-contact">
                    Contact
                </a>
            </li>

        </ul>

    </nav>

    <!-- PAGE CONTENT -->

    <main>
        @yield('content')
    </main>

    <!-- MASTER FOOTER -->

    <footer class="footer">

        <div class="footer-content">

            <!-- WEBSITE INFORMATION -->

            <div>
                <h3>GRAY BREW.</h3>

                <p>
                    A modern coffee shop dedicated to quality coffee,
                    freshly prepared beverages, and memorable moments.

                    Experience comfort, connection, and great coffee
                    with Gray Brew.
                </p>
            </div>

            <!-- QUICK NAVIGATION -->

            <div>
                <h4>Quick Links</h4>

                <div class="footer-links">

                    <a href="{{ route('home') }}">Home</a>

                    <a href="{{ route('about') }}">About Us</a>

                    <a href="{{ route('contact') }}">Contact Us</a>

                </div>
            </div>

            <!-- GROUP MEMBERS (PDF REQUIREMENT) -->

            <div>
                <h4>Project Group Members</h4>

                <div class="footer-members">

                    <p>Member 1: Jedrick Buctot</p>

                    <p>Member 2: Earl Jan Coquilla</p>

                    <p>Member 3: Nicko James Peñaflor</p>

                </div>
            </div>

        </div>

        <!-- COPYRIGHT -->

        <div class="footer-bottom">

            © {{ date('Y') }} Gray Brew Coffee Shop.
            All Rights Reserved.

        </div>

    </footer>

    <!-- MOBILE NAVIGATION JAVASCRIPT -->

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', function () {

            const isOpen = navLinks.classList.toggle('show');

            menuToggle.textContent = isOpen ? '✕' : '☰';

            menuToggle.setAttribute('aria-expanded', isOpen);

        });

        navLinks.querySelectorAll('a').forEach(link => {

            link.addEventListener('click', function () {

                navLinks.classList.remove('show');

                menuToggle.textContent = '☰';

                menuToggle.setAttribute('aria-expanded', 'false');

            });

        });
    </script>

    @stack('scripts')

</body>
</html>
