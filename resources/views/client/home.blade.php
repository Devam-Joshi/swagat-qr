@extends('client.layouts.main')

@section('title', 'Home - Famify Creative')

@section('content')
    <div class="section-banner">
        <div class="banner-video-container animate-box animated animate__animated" data-animate="animate__fadeInUp">
            <div id="banner-video-background"></div>
            <div class="hero-container position-relative">
                <div class="d-flex flex-column gspace-3">
                    <h1 class="title-heading-banner animate-box animated animate__animated"
                        data-animate="animate__fadeInLeft">
                        Famify Creative — Your Growth, Our Family
                    </h1>
                    <div class="banner-heading">
                        <div class="banner-video-content order-xl-1 order-2 animate-box animated animate__animated"
                            data-animate="animate__fadeInUp">
                            <div
                                class="d-flex flex-column flex-xl-row text-xl-start text-center align-items-center gspace-5">
                                <button class="request-loader"
                                    data-video="https://www.youtube.com/embed/yWw4bTANSRM?si=tKUYSjomqkxUvW1x">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                <p>
                                    Watch how <strong>Famify Creative</strong>, a family-run digital agency, helps brands
                                    connect,
                                    grow, and thrive through creativity and smart marketing.
                                </p>
                            </div>
                        </div>
                        <div class="banner-content order-xl-2 order-1 animate-box animated animate__animated"
                            data-animate="animate__fadeInRight">
                            <p>
                                At <strong>Famify Creative</strong>, we blend family values with modern innovation to
                                deliver
                                <strong>data-driven marketing</strong>, <strong>creative design</strong>, and
                                <strong>branding strategies</strong> that turn audiences into loyal customers.
                            </p>
                            <div
                                class="d-flex flex-md-row flex-column justify-content-center justify-content-xl-start align-self-center align-self-xl-start gspace-3">
                                <a href="{{ asset('about') }}" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>Get Started</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <div class="banner-reviewer">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Happy Client"
                                            class="avatar">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Client Review"
                                            class="avatar">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Customer Success"
                                            class="avatar">
                                    </div>
                                    <div class="detail">
                                        <span>2.7k Positive</span>
                                        <span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Section Expertise -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column flex-xl-row gspace-5">
                <div class="expertise-img-layout">
                    <div class="image-container expertise-img">
                        <img src="./image/dummy-img-600x400.jpg" alt="Expertise Image"
                            class="img-fluid  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="expertise-layout">
                            <div class="d-flex flex-column">
                                <div class="card-expertise-wrapper">
                                    <div class="card card-expertise  animate-box animated animate__animated"
                                        data-animate="animate__fadeInDown">
                                        <h4>Ready to Elevate Your Digital Presence?</h4>
                                        <p>Let's create a custom strategy that fits your business goals.</p>
                                        <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                            <a href="{{ route('contact') }}">Get Free Consultation</a>
                                            <i class="fa-solid fa-circle-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="expertise-spacer"></div>
                            </div>
                            <div class="expertise-spacer"></div>
                        </div>
                    </div>
                </div>
                <div class="expertise-title">
                    <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Expertise</span>
                    </div>
                    <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        Creative Minds. Real Results.
                    </h2>
                    <p>
                        At <strong>Famify Creative</strong>, we blend family values with digital innovation.
                        Our team of passionate creators and marketers help brands grow through strategy, creativity,
                        and performance-driven digital marketing.
                    </p>
                    <div class="d-flex flex-column flex-md-row gspace-2">
                        <div class="expertise-list">
                            <h5>What We Do Best</h5>
                            <ul class="check-list">
                                <li><a href="{{ url('/services/digital-marketing') }}">Digital Marketing</a></li>
                                <li><a href="{{ url('/services/social-media-marketing') }}">Social Media Marketing</a></li>
                                <li><a href="{{ url('/services/meta-ads-management') }}">Meta Ads Management</a></li>
                                <li><a href="{{ url('/services/web-design') }}">Web Design</a></li>
                                <li><a href="{{ url('/services/content-creative') }}">Content Creative</a></li>
                                <li><a href="{{ url('/services/2d-character-design') }}">2D Character Design</a></li>
                            </ul>
                        </div>

                        <div class="card card-expertise card-expertise-counter animate-box animated animate__animated"
                            data-animate="animate__fadeInUp">
                            <div class="d-flex flex-row gspace-2 align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <span class="counter" data-target="5"></span>
                                    <span class="counter-detail">+</span>
                                </div>
                                <h6>Years of Creative Experience in Digital Branding</h6>
                            </div>
                            <p>
                                From concept to campaign, Famify Creative delivers digital solutions that inspire engagement
                                and drive measurable growth — all powered by family passion and teamwork.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Modal Video -->
    <div class="section p-0">
        <div id="modal-overlay" class="modal-overlay">
            <span class="my-close"><i class="fa-solid fa-xmark"></i></span>
            <div class="my-modal">
                <iframe id="my-video-frame" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Section Partner -->
    {{-- <div class="section-partner">
        <div class="hero-container">
            <div class="card card-partner animate-box animated animate__animated" data-animate="animate__fadeInRight">
                <div class="partner-spacer"></div>
                <div class="row row-cols-xl-2 row-cols-1 align-items-center px-5 position-relative z-2">
                    <div class="col">
                        <div class="d-flex flex-column justify-content-start pe-xl-3 pe-0">
                            <h3 class="title-heading">Empowering Brands with Family-Driven Creativity</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column ps-xl-3 ps-0">
                            <p>
                                At <strong>Famify Creative</strong>, we take pride in partnering with growing businesses and
                                established brands alike. Our creative touch and performance strategies help every client
                                stand out, connect deeply, and grow digitally.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiperPartner-layout">
                    <div class="swiperPartner-overlay">
                        <div class="spacer"></div>
                    </div>
                    <div class="swiperPartner-container">
                        <div class="swiper swiperPartner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-7.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-6.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-8.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-2.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-1.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-3.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-5.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-4.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="partner-slide">
                                            <img src="{{ asset('assets/image/Client-7.png') }}" alt="Client"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-6.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-8.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-2.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-1.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-3.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-5.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partner-slide">
                                        <img src="{{ asset('assets/image/Client-4.png') }}" alt="Client"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Section Why Choose Us -->
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                <div class="col order-md-1 order-2">
                    <div class="d-flex flex-column gspace-2">
                        <div class="card card-chooseus animate-box animated fast animate__animated"
                            data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/Icon-2.png') }}" alt="Why Choose Us Icon"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Family-Driven Values</h4>
                                <p>At Famify Creative, our strength comes from unity. As a family-run team, we bring trust,
                                    dedication, and personal care to every brand we work with.</p>
                                <div class="link-wrapper">
                                    <a href="#">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animated animate__animated"
                            data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/icon-1.png') }}" alt="Why Choose Us Icon"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Creative & Innovative</h4>
                                <p>We blend strategy with creativity — from social media to web design — crafting ideas that
                                    truly represent your brand’s personality.</p>
                                <div class="link-wrapper">
                                    <a href="#">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animated slow animate__animated"
                            data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/Icon-3.png') }}" alt="Why Choose Us Icon"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Results You Can Trust</h4>
                                <p>We focus on measurable growth — turning creativity into performance that helps your
                                    business scale with confidence.</p>
                                <div class="link-wrapper">
                                    <a href="#">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col order-md-2 order-1">
                    <div class="d-flex flex-column gspace-5">
                        <div class="d-flex flex-column gspace-2">
                            <div class="sub-heading animate-box animated animate__animated"
                                data-animate="animate__fadeInDown">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Why Choose Famify Creative</span>
                            </div>
                            <h2 class="title-heading animate-box animated animate__animated"
                                data-animate="animate__fadeInDown">
                                Your Growth is Our Family Mission
                            </h2>
                            <p class="mb-0 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                We’re not just a team — we’re a family of creatives and strategists helping brands grow with
                                heart, trust, and innovation. When you work with us, you become part of the Famify family.
                            </p>
                        </div>

                        <div class="image-container">
                            <img src="{{ asset('assets/myImage/wcu.png') }}" alt="Why Choose Us Image"
                                class="chooseus-img">
                            <div class="card-chooseus-cta-layout">
                                <div class="chooseus-cta-spacer"></div>
                                <div class="d-flex flex-column align-items-end">
                                    <div class="chooseus-cta-spacer"></div>
                                    <div class="card-chooseus-cta-wrapper">
                                        <div class="card card-chooseus-cta animate-box animated animate__animated"
                                            data-animate="animate__fadeInUp">
                                            <h5>Partner with Famify Creative and grow with us — like family.</h5>
                                            <div class="link-wrapper">
                                                <a href="{{ route('contact') }}">Let’s Build Together</a>
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


    <!-- Section Service -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column justify-content-center text-center gspace-2">
                    <div class="sub-heading align-self-center animate-box animated animate__animated"
                        data-animate="animate__fadeInDown">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Core Services</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-medium animate-box animated animate__animated"
                        data-animate="animate__fadeInDown">Digital Solutions That Drive Real Results</h2>
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
                                            <img src="{{ asset('assets/image/digital-marketing-icons-F4LJ4W8.png') }}"
                                                alt="Content Marketing" class="img-fluid">
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
                                            <img src="{{ asset('assets/image/Icon-8.png') }}" alt="PPC Advertising"
                                                class="img-fluid">
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
                                            <img src="{{ asset('assets/image/Icon-6.png') }}" alt="Branding & Design"
                                                class="img-fluid">
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
                                            <img src="{{ asset('assets/image/Icon-1.png') }}" alt="Digital Strategy"
                                                class="img-fluid">
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
                    <p>Need a custom solution? Let's create a strategy tailored for your business. <a
                            href="{{ route('contact') }}">Get a Free Strategy Call</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Section Case Studies -->
    <div class="section p-0">
        <div class="hero-container">
            <div class="case-studies-layout">
                <div class="card card-case-studies">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Case Studies</span>
                                </div>
                                <h2 class="title-heading">See How We Help Businesses Thrive</h2>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column h-100 justify-content-end gspace-2 animate-box animated animate__animated"
                                data-animate="animate__fadeInRight">
                                <p>We don't just talk about results—we deliver them. Here are some of our most impactful
                                    case studies showcasing how our digital marketing strategies drive success.</p>
                                <div class="link-wrapper">
                                    <a href="./case_studies.html">More Case Studies</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column gspace-2">
                        <div class="d-flex flex-column flex-xl-row gspace-2">
                            <div class="card case-studies-content local-business animate-box animated fast animate__animated"
                                data-animate="animate__fadeInUp">
                                <div
                                    class="case-studies-component large align-self-end justify-content-end align-items-end">
                                    <div class="cs-component">
                                        <a href="#">Social</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Influencer</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Retargeting</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Google</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Video</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Local</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Community</a>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gspace-2">
                                    <a href="#" class="case-studies-title">
                                        <h4>Local Business Digital Transformation</h4>
                                    </a>
                                    <p>
                                        5x ROI on social media campaigns & 80% increase in engagement lorem ipsum dolor sit
                                        amet consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="card case-studies-content saas-leads animate-box animated animate__animated"
                                data-animate="animate__fadeInUp">
                                <div class="d-flex flex-column gspace-2">
                                    <a href="#" class="case-studies-title">
                                        <h4>SaaS Lead Generation Success</h4>
                                    </a>
                                    <p>
                                        150% increase in qualified leads & 70% lower customer acquisition cost.
                                    </p>
                                </div>
                                <div
                                    class="case-studies-component small align-self-end justify-content-end align-items-end">
                                    <div class="cs-component">
                                        <a href="#">Content</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Linkeind Ads</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Email</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Webinar</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Landing</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">CRM</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Retargeting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-xl-row gspace-2">
                            <div class="card case-studies-content ecommerce animate-box animated fast animate__animated"
                                data-animate="animate__fadeInUp">
                                <div
                                    class="case-studies-component small align-self-start justify-content-start align-items-start">
                                    <div class="cs-component">
                                        <a href="#">SEO</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">PPC Ads</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">CRO</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Analytics</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Influencer</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">A/B Testing</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Email</a>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gspace-2">
                                    <a href="#" class="case-studies-title">
                                        <h4>E-Commerce Growth Boost</h4>
                                    </a>
                                    <p>
                                        3x increase in organic traffic & 2x revenue growth in 6 months lorem ipsum dolor.
                                    </p>
                                </div>
                            </div>

                            <div class="card case-studies-content startup-branding animate-box animated animate__animated"
                                data-animate="animate__fadeInUp">
                                <div class="d-flex flex-column gspace-2">
                                    <a href="#" class="case-studies-title">
                                        <h4>Startup Brand Awareness Expansion</h4>
                                    </a>
                                    <p>
                                        200% increase in brand mentions & 60% higher engagement rates lorem ipsum dolor sit
                                        amet consectetur.
                                    </p>
                                </div>
                                <div
                                    class="case-studies-component large align-self-start justify-content-start align-items-start">
                                    <div class="cs-component">
                                        <a href="#">Viral</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Partnership</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">PR</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Growth</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">UGC</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Media</a>
                                    </div>
                                    <div class="cs-component">
                                        <a href="#">Brading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div> --}}

    <!-- Section Testimonial -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-5">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <div class="col col-xl-4">
                        <div class="testimonial-header-wrapper animate-box animated fast animate__animated"
                            data-animate="animate__fadeInDown">
                            <div class="card card-testimonial-reviewer">
                                <div
                                    class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-3">
                                    <div class="testimonial-reviewer">
                                        <div class="detail">
                                            <h6>2.7k Positive</h6>
                                            <h6>Reviews</h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-rating-container">
                                        <div class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                            <div class="d-flex flex-row align-items-center">
                                                <span class="counter" data-target="95"></span>
                                                <span class="counter-detail">%</span>
                                            </div>
                                            <p>Client Satisfaction</p>
                                        </div>
                                        <div class="underline-vertical"></div>
                                        <div class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                            <div class="d-flex flex-row align-items-center">
                                                <span class="counter" data-target="60"></span>
                                                <span class="counter-detail">%</span>
                                            </div>
                                            <p>Business Growth</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-center gspace-2">
                                    <div class="testimonial-header-link-wrapper">
                                        <i class="fa-regular fa-circle-check accent-color"></i>
                                        <a href="#">Social Media Marketing</a>
                                    </div>
                                    <div class="testimonial-header-link-wrapper">
                                        <i class="fa-regular fa-circle-check accent-color"></i>
                                        <a href="#">Brand Growth Strategy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-xl-8">
                        <div class="testimonial-header-wrapper-title animate-box animated animate__animated"
                            data-animate="animate__fadeInRight">
                            <div class="card-testimonial-header-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>What Our Clients Say</span>
                                </div>
                                <h2 class="title-heading">Real Growth Stories from Famify Creative Clients</h2>
                                <p>From restaurants to solar companies — discover how Famify Creative helped brands like
                                    Swagat Restaurant, Shyam Engineering, and Maruti Solar grow online with impactful
                                    digital strategies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <div class="overflow-hidden">
                        <div class="swiper swiperTestimonial">
                            <div class="swiper-wrapper">

                                <!-- Swagat Restaurant -->
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Swagat Restaurant</span>
                                                    <p class="profile-info">Porbandar | Bhanvad | Khambhalia |
                                                        Ranakandorana</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Famify Creative handled our restaurant’s full digital presence — from Meta Ads
                                            to local SEO. We saw a huge rise in online orders and visibility across all four
                                            branches.”
                                        </p>
                                    </div>
                                </div>

                                <!-- Shyam Engineering -->
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">

                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Shyam Engineering</span>
                                                    <p class="profile-info">Porbandar</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “The Famify team redesigned our branding and digital profile. Their creative
                                            content and targeted campaigns helped us attract more industrial clients.”
                                        </p>
                                    </div>
                                </div>

                                <!-- Maruti Solar -->
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">

                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Maruti Solar</span>
                                                    <p class="profile-info">Porbandar</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Famify Creative helped us generate high-quality solar leads with effective Meta
                                            Ads and local marketing. Their communication and creativity are excellent.”
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- swiper-wrapper end -->
                        </div> <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Digital Process -->
    <!-- Section: Our Process -->
    <div class="section-wrapper-digital-process">
        <div class="section digital-process-banner">
            <div class="hero-container">
                <div class="digital-process-content">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                                data-animate="animate__fadeInDown">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>How We Work</span>
                                </div>
                                <h2 class="title-heading">Our Simple Path to Digital Growth</h2>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 justify-content-end h-100 animate-box animated fast animate__animated"
                                data-animate="animate__fadeInDown">
                                <p>
                                    At <strong>Famify Creative</strong>, every strategy begins with understanding your brand
                                    story.
                                    Our family-run team blends creativity, data, and innovation to deliver real, measurable
                                    growth.
                                </p>
                                <div class="link-wrapper">
                                    <a href="./contact.html">Start Your Journey</a>
                                    <i class="fa-solid fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Steps -->
                    <div class="digital-process-steps-wrapper">
                        <div class="digital-process-steps">
                            <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">

                                <div class="col">
                                    <div class="digital-process-step animate-box animated animate__animated"
                                        data-animate="animate__fadeInUp">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img src="{{ asset('assets/image/digital-marketing-icons-N952ZWA.png') }}"
                                                    alt="Discovery Icon" class="process-icon">
                                            </div>
                                            <span>01</span>
                                        </div>
                                        <div class="d-flex flex-column gspace-2">
                                            <h5>Discovery & Consultation</h5>
                                            <p>
                                                We listen, learn, and understand your business goals to create a strategy
                                                that fits your brand perfectly.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated"
                                        data-animate="animate__fadeInDown">
                                        <div class="step-spacer"></div>
                                        <div class="digital-process-step">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <img src="{{ asset('assets/image/Icon-11.png') }}"
                                                        alt="Planning Icon" class="process-icon">
                                                </div>
                                                <span>02</span>
                                            </div>
                                            <div class="d-flex flex-column gspace-2">
                                                <h5>Strategy & Planning</h5>
                                                <p>
                                                    Our creative minds and marketing experts craft a roadmap designed to
                                                    boost visibility and conversions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated"
                                        data-animate="animate__fadeInUp">
                                        <div class="step-spacer"></div>
                                        <div class="digital-process-step">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <img src="{{ asset('assets/image/Icon-10.png') }}"
                                                        alt="Execution Icon" class="process-icon">
                                                </div>
                                                <span>03</span>
                                            </div>
                                            <div class="d-flex flex-column gspace-2">
                                                <h5>Execution & Optimization</h5>
                                                <p>
                                                    From design to campaigns, we execute with precision and continuously
                                                    optimize for the best performance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated"
                                        data-animate="animate__fadeInDown">
                                        <div class="step-spacer"></div>
                                        <div class="digital-process-step">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <img src="{{ asset('assets/image/Icon-12.png') }}" alt="Growth Icon"
                                                        class="process-icon">
                                                </div>
                                                <span>04</span>
                                            </div>
                                            <div class="d-flex flex-column gspace-2">
                                                <h5>Results & Growth</h5>
                                                <p>
                                                    We deliver transparent reports and real results—helping your brand grow
                                                    stronger every day with Famify Creative.
                                                </p>
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
        <div class="spacer"></div>
    </div>


    <!-- Section Newsletter -->
    <div class="section">
        <div class="hero-container">
            <div class="newsletter-wrapper">
                <div class="newsletter-layout">
                    <div class="spacer"></div>
                    <div class="d-flex flex-column gspace-5 position-relative z-2">

                        <!-- Title & Text -->
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                            data-animate="animate__fadeInLeft">
                            <h3 class="title-heading">Stay Ahead with Famify Insights</h3>
                            <p>Join the Famify Creative family! Get digital marketing tips, trends, and creative inspiration
                                delivered to your inbox.</p>
                        </div>

                        <!-- Success & Error Alerts -->
                        @if (session('success'))
                            <div class="alert success">
                                <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                                <p class="text-center">{{ session('success') }}</p>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert error">
                                <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                                <p class="text-center">{{ session('error') }}</p>
                            </div>
                        @endif

                        <!-- Newsletter Form -->
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" id="newsletterForm"
                            class="needs-validation animate-box animated animate__animated"
                            data-animate="animate__fadeInRight">
                            @csrf
                            <div class="input-container">
                                <input type="email" name="email" id="newsletter-email"
                                    placeholder="Enter your email address" required>
                                @error('email')
                                    <p class="error-text">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn btn-accent" type="submit">
                                <span class="btn-title">
                                    <span>Subscribe Now</span>
                                </span>
                                <span class="icon-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
