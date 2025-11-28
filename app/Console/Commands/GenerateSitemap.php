<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for Famify Creative';

    public function handle()
    {
        $baseUrl = 'https://famifycreative.com';

        $sitemap = \Spatie\Sitemap\Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create($baseUrl . '/'));
        $sitemap->add(Url::create($baseUrl . '/about'));
        $sitemap->add(Url::create($baseUrl . '/contact'));
        $sitemap->add(Url::create($baseUrl . '/services'));

        // Add dynamic service pages
        $services = collect([
            'digital-marketing',
            'social-media-marketing',
            'meta-ads-management',
            'web-design',
            'content-creative',
            '2d-character-design',
        ]);

        foreach ($services as $slug) {
            $sitemap->add(Url::create($baseUrl . '/services/' . $slug));
        }

        // Save the sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
