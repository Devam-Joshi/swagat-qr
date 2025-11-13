@extends('client.layouts.main')

@section('title', $service['title'] . ' | Famify Creative')
@section('meta_description', $service['description'])

@section('content')

<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                    {{ $service['title'] }}
                </h2>
                <nav class="breadcrumb">
                    <a href="{{ route('home') }}" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">Service Details</p>
                </nav>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div>

<!-- Section Services -->
<div class="section pb-0">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-5">
            <div class="image-container">
                {{-- <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="single-service-img"> --}}
                <div class="single-service-title-layout">
                    <div>
                        <div class="single-service-spacer"></div>
                        <div class="single-service-title-wrapper">
                            <div class="single-service-title">
                                <div class="sub-heading animate-box animated slow animate__animated"
                                    data-animate="animate__fadeInRight">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Our Expertise</span>
                                </div>
                                <h3 class="title-heading animate-box animated animate__animated"
                                    data-animate="animate__fadeInRight">
                                    {{ $service['title'] }}
                                </h3>
                                <p>{{ $service['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-spacer"></div>
                </div>
            </div>

            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                <div class="col col-xl-8">
                    <div class="d-flex flex-column gspace-2">
                        <h4>Overview</h4>
                        <p>
                            @if($service['slug'] === 'social-media-marketing')
                                At <strong>Famify Creative</strong>, we help brands grow through custom social media strategies that connect deeply with audiences and drive measurable results.
                            @elseif($service['slug'] === 'digital-marketing')
                                Our digital marketing experts craft data-driven campaigns across SEO, content, and performance ads to elevate your brand visibility.
                            @elseif($service['slug'] === 'meta-ads-management')
                                We specialize in targeted Meta Ads campaigns that convert clicks into customers and scale your reach profitably.
                            @elseif($service['slug'] === 'web-design')
                                We design modern, responsive, and creative websites that represent your brand and convert visitors into loyal customers.
                            @elseif($service['slug'] === 'content-creative')
                                Our content team creates eye-catching visuals, reels, and designs to boost engagement and brand awareness.
                            @elseif($service['slug'] === '2d-character-design')
                                Bring ideas to life with expressive 2D characters crafted by our creative design team.
                            @else
                                Explore how Famify Creative can help your business grow through innovative marketing and design.
                            @endif
                        </p>

                        {{-- <div class="row row-cols-md-2 row-cols-1 grid-spacer-2 grid-spacer-md-3">
                            <div class="col">
                                <div class="image-container">
                                    <img src="{{ $service['image_1'] }}" alt="{{ $service['title'] }}"
                                        class="img-fluid rounded shadow-sm">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image-container">
                                    <img src="{{ $service['image_2'] }}" alt="{{ $service['title'] }}"
                                        class="img-fluid rounded shadow-sm">
                                </div>
                            </div>
                        </div> --}}

                        <div class="card service-included mt-4">
                            <h4>What's Included</h4>
                            <div class="underline-accent-short"></div>
                            <ul class="check-list">
                                <li>Customized Strategy & Planning</li>
                                <li>Creative Content & Design</li>
                                <li>Performance Tracking</li>
                                <li>Dedicated Account Management</li>
                            </ul>
                        </div>

                        <h4 class="mt-5">Why Choose Famify Creative?</h4>
                        <p>
                            With years of experience in digital marketing and design, we blend creativity with data to deliver campaigns that truly perform.
                        </p>
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="d-flex flex-column gspace-2">
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                        <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                        <div class="d-flex flex-column gspace-0">
                                            <h5>Data-Driven Campaigns</h5>
                                            <p>Strategies built on insights and analytics</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                        <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                        <div class="d-flex flex-column gspace-0">
                                            <h5>Expert Team</h5>
                                            <p>Specialists in every field of digital marketing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column gspace-2">
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                        <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                        <div class="d-flex flex-column gspace-0">
                                            <h5>Tailored Approach</h5>
                                            <p>We build strategies unique to your brand</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                        <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                        <div class="d-flex flex-column gspace-0">
                                            <h5>Transparent Results</h5>
                                            <p>Real-time reports and performance tracking</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col col-xl-4">
                    <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-5">
                        <div class="card service-recent">
                            <h4>Recent Services</h4>
                            <div class="underline-accent-short"></div>
                            <ul class="single-service-list">
                                @foreach($allServices as $item)
                                    <li>
                                        <a href="{{ route('services.show', $item['slug']) }}"
                                            @if($item['slug'] === $service['slug']) class="active" @endif>
                                            {{ $item['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
