@extends('client.layouts.main')
@section('title', 'About Us | Famify Creative')
{{-- Meta Description --}}
@section('meta_description', 'Discover Famify Creative — a branding, design, and digital agency crafting unforgettable brand experiences.')

{{-- Keywords --}}
@section('meta_keywords', 'about famify creative, creative agency, branding agency, digital design team')

{{-- Open Graph --}}
@section('og_title', 'About Famify Creative – Who We Are')
@section('og_description', 'We are a passionate creative team offering branding, design, and digital services.')
@section('og_image', asset('assets/myImage/android-chrome-512x512.png'))

@section('canonical', route('about'))

@section('content')
    <!-- Section Banner -->
    <div class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h2 class="title-heading animate-box animate__animated" data-animate="animate__fadeInRight">About Famify
                        Creative</h2>
                    <nav class="breadcrumb">
                        <a href="{{ route('home') }}" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">About Us</p>
                    </nav>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>

    <!-- Section About Us -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column flex-xl-row gspace-5 align-items-center">
                <div class="about-img-layout">
                    <div class="image-container about-img">
                        <img src="{{ asset('assets/image/about-famify.jpg') }}" alt="About Famify"
                            class="img-fluid animate-box animate__animated" data-animate="animate__fadeInUp">
                        <div class="about-layout">
                            <div class="d-flex flex-column">
                                <div class="card-about-wrapper">
                                    <div class="card card-about animate-box animate__animated"
                                        data-animate="animate__fadeInDown">
                                        <div class="d-flex flex-row align-items-center">
                                            <span class="counter" data-target="5"></span>
                                            <span class="counter-detail">+</span>
                                        </div>
                                        <h6>Years of Creative & Digital Excellence</h6>
                                    </div>
                                </div>
                                <div class="about-spacer"></div>
                            </div>
                            <div class="about-spacer"></div>
                        </div>
                    </div>
                </div>

                <div class="about-title">
                    <div class="d-flex flex-column gspace-2">
                        <div class="sub-heading animate-box animate__animated" data-animate="animate__fadeInRight">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>About Us</span>
                        </div>
                        <h2 class="title-heading animate-box animate__animated" data-animate="animate__fadeInRight">Who We
                            Are & What Drives Us</h2>
                        <p>At <strong>Famify Creative</strong>, we’re not just an agency — we’re your creative partner. From
                            brand identity to performance marketing, we design strategies that help brands grow with purpose
                            and impact.</p>
                        <p>We believe creativity backed by data can change the way businesses connect with their audience.
                        </p>
                        <div class="d-flex flex-column flex-md-row gspace-1 gspace-md-5">
                            <div class="about-list">
                                <ul class="check-list">
                                    <li><a href="{{ route('services.show', 'meta-ads-management') }}">Meta Ads
                                            Management</a></li>
                                    <li><a href="{{ route('services.show', 'social-media-marketing') }}">Social Media
                                            Marketing</a></li>
                                    <li><a href="{{ route('services.show', 'content-creative') }}">Content Creation</a></li>
                                </ul>
                            </div>
                            <div class="about-list">
                                <ul class="check-list">
                                    <li><a href="{{ route('services.show', 'digital-marketing') }}">Digital Marketing</a>
                                    </li>
                                    <li><a href="{{ route('services.show', 'web-design') }}">Web Design</a></li>
                                    <li><a href="{{ route('services.show', '2d-character-design') }}">2D Character
                                            Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Why Choose Us -->
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                <div class="col order-md-1 order-2">
                    <div class="d-flex flex-column gspace-2">
                        <div class="card card-chooseus animate-box animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-layout">
                                <img src="{{ asset('assets/myImage/inno.png') }}" alt="Innovation"
                                    class="img-fluid">
                            </div>
                            <div class="chooseus-content">
                                <h4>Innovation & Integrity</h4>
                                <p>Every decision we make blends creative insight with transparency and analytics-driven
                                    precision.</p>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-layout">
                                <img src="{{ asset('assets/myImage/collaboration.png') }}" alt="Collaboration"
                                    class="img-fluid">
                            </div>
                            <div class="chooseus-content">
                                <h4>Collaboration</h4>
                                <p>We treat every client as a creative partner — because the best ideas happen when we work
                                    together.</p>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-layout">
                                <img src="{{ asset('assets/myImage/statistics.png') }}" alt="Results" class="img-fluid">
                            </div>
                            <div class="chooseus-content">
                                <h4>Results Driven</h4>
                                <p>We focus on measurable outcomes — turning data into growth and creativity into
                                    conversions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col order-md-2 order-1">
                    <div class="d-flex flex-column gspace-5">
                        <div class="sub-heading animate-box animate__animated" data-animate="animate__fadeInDown">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Values</span>
                        </div>
                        <h2 class="title-heading animate-box animate__animated" data-animate="animate__fadeInDown">The
                            Principles That Define Us</h2>
                        <p class="mb-0 animate-box animate__animated" data-animate="animate__fadeInDown">
                            At Famify Creative, creativity meets data, and passion meets purpose — giving brands the tools
                            to truly connect and grow.
                        </p>
                        <div class="image-container">
                            <img src="{{ asset('assets/myImage/wcu.png') }}" alt="Why Choose Us"
                                class="chooseus-img">
                            <div class="card-chooseus-cta-layout">
                                <div class="d-flex flex-column align-items-end">
                                    <div class="card-chooseus-cta-wrapper">
                                        <div class="card card-chooseus-cta animate-box animate__animated"
                                            data-animate="animate__fadeInUp">
                                            <h5>Partner with Famify & take your brand to the next level.</h5>
                                            <div class="link-wrapper">
                                                <a href="{{ route('contact') }}">Let's Talk Strategy</a>
                                                <i class="fa-solid fa-circle-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Our Team -->
    <div class="section">
        <div class="hero-container">
            <div class="team-wrapper">
                <div class="card team-layout">
                    <div class="d-flex flex-column align-items-center gspace-2 animate-box animate__animated"
                        data-animate="animate__fadeInLeft">
                        <div class="sub-heading">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Team</span>
                        </div>
                        <h2 class="title-heading">Meet the Famify Creative Team</h2>
                        <p class="text-center">
                            We’re a family-run agency — where creativity meets trust. Every project is powered by passion,
                            teamwork, and shared vision.
                        </p>
                    </div>

                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                        <!-- CEO -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/Pooja600.png') }}" alt="Pooja Joshi"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Pooja Joshi</h4>
                                    <span class="title">CEO & Lead Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Co-CEO -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/devam600.png') }}" alt="Devam Joshi"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Devam Joshi</h4>
                                    <span class="title">Co-CEO | Digital Marketing Head | Software Development Head</span>
                                </div>
                            </div>
                        </div>

                        <!-- Designer -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/Madhav600.png') }}" alt="Madhav Thanki"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Madhav Thanki</h4>
                                    <span class="title">Graphic & Visual Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ads Manager -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/Mayur600.png') }}" alt="Mayur Joshi"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Mayur Joshi</h4>
                                    <span class="title">Ads Manager | UI/UX Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Motion Artist -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/Riddhi600.png') }}" alt="Jenil Parmar"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Riddhi Thanki</h4>
                                    <span class="title">Full Stack Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Content Creator -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="image-team">
                                    <img src="{{ asset('assets/myImage/Vansh600.png') }}" alt="Krisha Joshi"
                                        class="img-fluid">
                                    <div class="social-team-wrapper">
                                        <div class="social-team-spacer"></div>
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="social-team-container">
                                                <a href="https://facebook.com" class="social-item"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                                <a href="https://instagram.com" class="social-item"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="https://linkedin.com" class="social-item"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <div class="social-team-spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-profile">
                                    <h4>Vansh Thanki</h4>
                                    <span class="title">Content & Creative Strategist</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
