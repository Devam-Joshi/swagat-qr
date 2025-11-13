<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // Define all services
        $services = collect([
            [
                'slug' => 'digital-marketing',
                'title' => 'Digital Marketing',
                'description' => 'We help brands grow online with data-driven strategies and targeted campaigns.',
                'image_1' => asset('assets/myImage/Digital.png'),
                'image_2' => asset('assets/myImage/Digital3.png'),
            ],
            [
                'slug' => 'social-media-marketing',
                'title' => 'Social Media Marketing',
                'description' => 'Engage your audience and grow your brand on social platforms.',
                'image_1' => asset('assets/img/services/social-media.jpg'),
                'image_2' => asset('assets/img/services/social-media.jpg'),
            ],
            [
                'slug' => 'meta-ads-management',
                'title' => 'Meta Ads Management',
                'description' => 'Optimize your Meta ad spend for better ROI and reach.',
                'image_1' => asset('assets/img/services/meta-ads.jpg'),
                'image_2' => asset('assets/img/services/meta-ads.jpg'),
            ],
            [
                'slug' => 'web-design',
                'title' => 'Web Design',
                'description' => 'We design modern, responsive websites that convert visitors into customers.',
                'image_1' => asset('assets/img/services/web-design.jpg'),
                'image_2' => asset('assets/img/services/web-design.jpg'),
            ],
            [
                'slug' => 'content-creative',
                'title' => 'Content Creative',
                'description' => 'Creative visuals and storytelling that make your brand stand out.',
                'image_1' => asset('assets/img/services/content-creative.jpg'),
                'image_2' => asset('assets/img/services/content-creative.jpg'),
            ],
            [
                'slug' => '2d-character-design',
                'title' => '2D Character Design',
                'description' => 'Bring your ideas to life with unique, eye-catching 2D character art.',
                'image_1' => asset('assets/img/services/2d-character.jpg'),
                'image_2' => asset('assets/img/services/2d-character.jpg'),
            ],
        ]);

        // Find the selected service
        $service = $services->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        // Pass both the single service and all services
        $allServices = $services;

        return view('client.services.show', compact('service', 'allServices'));
    }
}
