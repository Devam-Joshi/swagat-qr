@extends('layouts.app')

@section('title', 'Social Media Marketing | Famify Creative')
@section('meta_description', 'Boost your brand presence with Famify Creative’s Social Media Marketing. We craft family-driven, data-backed strategies to grow engagement and ROI.')

@section('content')

<!-- Banner Section -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout text-center">
            <div class="d-flex flex-column align-items-center gspace-2">
                <h2 class="title-heading animate-box" data-animate="animate__fadeInRight">
                    Social Media Marketing
                </h2>
                <nav class="breadcrumb">
                    <a href="{{ route('home') }}" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">Social Media Marketing</p>
                </nav>    
            </div>
        </div>
    </div>
</div>

<!-- Service Section -->
<div class="section pb-0">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-5">
            <div class="image-container">
                <img src="{{ asset('assets/images/services/social-media.jpg') }}" alt="Social Media Marketing - Famify Creative" class="single-service-img">
                <div class="single-service-title-layout">
                    <div class="single-service-title-wrapper">
                        <div class="single-service-title">
                            <div class="sub-heading animate-box" data-animate="animate__fadeInRight">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Our Expertise</span>
                            </div>
                            <h3 class="title-heading animate-box" data-animate="animate__fadeInRight">
                                Boost Your Brand with Strategic Social Media Marketing
                            </h3>
                            <p>At Famify Creative, we turn social media into a storytelling platform — connecting brands with audiences through creativity, strategy, and family-driven passion. From Instagram to LinkedIn, we craft posts that engage, inspire, and convert.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                <div class="col col-xl-8">
                    <h4>Overview</h4>
                    <p>
                        Our social media marketing services are designed to help your brand grow authentically. 
                        We handle everything — from content creation to campaign management — so you can focus on your business while we grow your community.
                    </p>

                    <div class="row row-cols-md-2 grid-spacer-3">
                        <div class="col">
                            <img src="{{ asset('assets/images/services/smm1.jpg') }}" class="img-fluid" alt="Social Media Campaigns">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/images/services/smm2.jpg') }}" class="img-fluid" alt="Content Strategy">
                        </div>
                    </div>

                    <div class="card service-included mt-4">
                        <h4>What's Included</h4>
                        <div class="underline-accent-short"></div>
                        <ul class="check-list">
                            <li>Platform Strategy & Planning</li>
                            <li>Creative Content Production</li>
                            <li>Meta & Paid Ads Management</li>
                            <li>Community Engagement</li>
                            <li>Influencer Collaborations</li>
                            <li>Analytics & Performance Reporting</li>
                        </ul>
                    </div>

                    <h4 class="mt-5">Why Choose Famify Creative?</h4>
                    <p>
                        We’re a family-run team with a passion for digital storytelling. Every post, reel, and campaign reflects our belief in creativity with purpose.
                    </p>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <div class="d-flex align-items-center gspace-1">
                                    <i class="fa-regular fa-circle-check accent-color"></i>
                                    <div>
                                        <h5>Result-Driven Campaigns</h5>
                                        <p>Focus on real engagement & ROI.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gspace-1">
                                    <i class="fa-regular fa-circle-check accent-color"></i>
                                    <div>
                                        <h5>Creative & Consistent</h5>
                                        <p>We bring freshness to every post.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <div class="d-flex align-items-center gspace-1">
                                    <i class="fa-regular fa-circle-check accent-color"></i>
                                    <div>
                                        <h5>Family-Driven Passion</h5>
                                        <p>Built with trust, care, and creativity.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gspace-1">
                                    <i class="fa-regular fa-circle-check accent-color"></i>
                                    <div>
                                        <h5>Data & Insights</h5>
                                        <p>Make decisions backed by analytics.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col col-xl-4">
                    <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-5">
                        <div class="card service-recent">
                            <h4>Other Services</h4>
                            <div class="underline-accent-short"></div>
                            <ul class="single-service-list">
                                <li><a href="{{ route('services.digital_marketing') }}">Digital Marketing</a></li>
                                <li><a href="{{ route('services.web_design') }}">Web Design</a></li>
                                <li><a href="{{ route('services.meta_ads') }}">Meta Ads Management</a></li>
                                <li><a href="{{ route('services.content_creative') }}">Content Creative</a></li>
                                <li><a href="{{ route('services.character_design') }}">2D Character Design</a></li>
                            </ul>
                        </div>

                        <div class="cta-service-banner">
                            <div class="spacer"></div>
                            <h3 class="title-heading">Transform Your Brand with Famify!</h3>
                            <p>
                                Ready to elevate your online presence? Let’s build social strategies that convert followers into loyal fans.
                            </p>
                            <div class="link-wrapper">
                                <a href="{{ route('about') }}">Read More</a>
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
