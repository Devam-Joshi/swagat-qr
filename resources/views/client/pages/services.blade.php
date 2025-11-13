@extends('client.layouts.main')

@section('content')
    <!-- Banner Section -->
    <div class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        Our Services
                    </h2>
                    <nav class="breadcrumb">
                        <a href="{{ url('/') }}" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">Services</p>
                    </nav>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>

    <!-- Section: Our Core Services -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column justify-content-center text-center gspace-2">
                    <div class="sub-heading align-self-center animate-box animated animate__animated"
                        data-animate="animate__fadeInDown">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Core Expertise</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-medium animate-box animated animate__animated"
                        data-animate="animate__fadeInDown">
                        Creative Digital Solutions That Help Your Brand Grow
                    </h2>
                </div>

                <div class="card-service-wrapper">
                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">

                        <!-- Social Media Marketing -->
                        <div class="col">
                            <div class="card card-service animate-box animated slow animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/Icon-7.png') }}"
                                                alt="Social Media Marketing" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Social Media Marketing</h4>
                                    </div>
                                </div>
                                <p>Build your brand’s voice and grow your online presence through strategic, creative, and
                                    consistent social media campaigns.</p>
                                <a href="{{ route('services.show', 'social-media-marketing') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Content Marketing -->
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/digital-marketing-icons-F4LJ4W8.png') }}" alt="Content Marketing"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Content Marketing</h4>
                                    </div>
                                </div>
                                <p>Tell your story with impact. From visuals to words, we craft engaging content that
                                    connects emotionally and converts effectively.</p>
                                <a href="{{ route('services.show', 'content-creative') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Paid Ads -->
                        <div class="col">
                            <div class="card card-service animate-box animated fast animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/Icon-8.png') }}" alt="PPC Advertising" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Meta & Google Ads</h4>
                                    </div>
                                </div>
                                <p>Maximize your ROI with precision-targeted ad campaigns across Meta, Google, and YouTube —
                                    designed to convert clicks into customers.</p>
                                <a href="{{ route('services.show', 'meta-ads-management') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Branding & Design -->
                        <div class="col">
                            <div class="card card-service animate-box animated slow animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/Icon-6.png') }}" alt="Branding & Design" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Branding & Design</h4>
                                    </div>
                                </div>
                                <p>Create a powerful brand identity with stunning visuals, cohesive design systems, and
                                    strategic messaging that speaks to your audience.</p>
                                <a href="{{ route('services.show', '2d-character-design') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Website Development -->
                        <div class="col">
                            <div class="card card-service animate-box animated fast animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/Icon-4.png') }}" alt="Web Development"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Website Development</h4>
                                    </div>
                                </div>
                                <p>We design and build modern, responsive websites that not only look beautiful but also
                                    deliver exceptional performance and results.</p>
                                <a href="{{ route('services.show', 'web-design') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Digital Strategy -->
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/image/Icon-1.png') }}"
                                                alt="Digital Strategy" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>Digital Strategy</h4>
                                    </div>
                                </div>
                                <p>From market research to campaign execution — we plan every move with data, creativity,
                                    and your brand goals at the center.</p>
                                <a href="{{ route('services.show', 'digital-marketing') }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-link-footer">
                    <p>Need a tailored plan for your business? Let’s create a growth strategy just for you.
                        <a href="{{ route('contact') }}">Get a Free Strategy Call</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
