<!-- Top Header -->
<header class="main-header">
    <div class="container">
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background-color:#1A1E21;">
            <div class="container">
                <a href="/">
                    <img class="header__logo" src="./assets/images/logo/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item main-nav-link">
                            <a class="nav-link" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item main-nav-link">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item main-nav-link">
                            <a class="nav-link" href="/about-us.php">About Us</a>
                        </li>
                        <li class="nav-item main-nav-link">
                            <a class="nav-link" href="/contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item main-nav-link">
                            <a class="nav-link" href="https://xpertsfacility.com/blog/">Blog</a>
                        </li>
                        <li class="nav-item main-nav-link" style="display: flex; align-items: center;">
                            <a class="nav-link" href="/login.php">Login</a>
                            <div style="margin-left: 2rem;">
                                <img class="nav-flag-img" src="../assets/images/flags/sri-lanka.png"></img>
                            </div>
                        </li>
                        <li class="nav-item main-nav-link" style="display: flex; align-items: center;">
                            <a class="nav-link" href="/profile.php"><i class="fas fa-user"></i></a>
                            <div style="margin-left: 2rem;">
                                <img class="nav-flag-img" src="../assets/images/flags/sri-lanka.png"></img>
                            </div>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </div>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {

            window.addEventListener('scroll', function() {

                if (window.scrollY > 200) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
        // DOMContentLoaded  end
    </script>

</header>