@extends('client.layouts.main')

@section('title', 'Contact - Famify Creative')

@section('content')
    <div class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        Contact Us
                    </h2>
                    <nav class="breadcrumb">
                        <a href="{{ url('/') }}" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">Contact Us</p>
                    </nav>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>

    <!-- Section Contact -->
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 g-5">
                <div class="col col-xl-5">
                    <div class="contact-title-wrapper">
                        <div class="card contact-title">
                            <div class="sub-heading">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Let’s Connect</span>
                            </div>
                            <h2 class="title-heading">Get in Touch with Famify Creative</h2>
                            <p>
                                We’re a family-run creative agency helping brands grow with digital innovation and design.
                                Whether you need social media management, ads, or full brand strategy — we’re just a message
                                away!
                            </p>

                            <div
                                class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone-volume accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Phone Number</span>
                                    <h5>+91 91040 11600</h5>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Email Address</span>
                                    <h5>famifycreative@gmail.com</h5>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Office Address</span>
                                    <h5>Nidhi Park 1, Chhaya, Porbandar, Gujarat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-7">
                    <div id="success-message" class="alert success hidden">
                        <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                        <p>Thank you! Your message has been sent successfully.</p>
                    </div>

                    <div id="error-message" class="alert error hidden">
                        <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                        <p>Oops! Something went wrong. Please try again later.</p>
                    </div>

                    <div class="form-layout-wrapper">
                        <div class="card form-layout">
                            <h3 class="title-heading">Let’s Talk About Your Next Project</h3>
                            <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" class="form">
                                @csrf
                                <div class="row row-cols-md-2 row-cols-1 g-3">
                                    <div class="col">
                                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                            required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row row-cols-md-2 row-cols-1 g-3">
                                    <div class="col">
                                        <input type="email" name="email" id="email" placeholder="Email Address"
                                            required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                                <div class="form-button-container">
                                    <button type="submit" class="btn btn-accent">
                                        <span class="btn-title">
                                            <span>Send Message</span>
                                        </span>
                                        <span class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Maps -->
    <div class="section pt-0">
        <div class="hero-container">
            <iframe loading="lazy" class="maps overflow-hidden"
                src="https://www.google.com/maps?q=Nidhi+Park+1,+Chhaya,+Porbandar,+Gujarat&z=15&output=embed"
                title="Famify Creative Office Location" aria-label="Famify Creative Office Location">
            </iframe>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            Please correct the highlighted fields and try again.
        </div>
    @endif

@endsection
