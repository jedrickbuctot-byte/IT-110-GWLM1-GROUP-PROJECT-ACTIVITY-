
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

        .nav-contact {
            background: #292929;
            color: white;
            padding: 10px 22px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color .3s;
        }

        .nav-contact:hover,
        .nav-contact:focus-visible {
            background: #A68A64;
            color: white;
        }

        /* FOOTER */

        .footer {
            background: #252525;
            color: white;
            padding: 55px 7% 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
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
        <div class="logo">
            GRAY <span>BREW.</span>
        </div>
        <a href="{{ route('contact') }}" class="nav-contact">Contact</a>
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

            <!-- GROUP MEMBERS (PDF REQUIREMENT) -->

            <div>
                <h4>Project Group Members</h4>

                <div class="footer-members">

                    <p>Member 1: [Group Leader's Name]</p>

                    <p>Member 2: [Member 2 Name]</p>

                    <p>Member 3: [Member 3 Name]</p>

                </div>
            </div>

        </div>

        <!-- COPYRIGHT -->

        <div class="footer-bottom">

            © {{ date('Y') }} Gray Brew Coffee Shop.
            All Rights Reserved.

        </div>

    </footer>

    @stack('scripts')

</body>
</html>
