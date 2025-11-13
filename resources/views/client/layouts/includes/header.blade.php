<header>
    <!-- Section Navbar -->
    <div id="header">
        <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-xl">
                <div class="navbar-container">
                    <div class="logo-container">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/myImage/FAMIFY-WEBSITE-LOGO.png') }}" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars "></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('service') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-action-container">
                        <div class="navbar-icon-wrapper">
                            <div class="icon-circle">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <h6>+91 9664761600</h6>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
