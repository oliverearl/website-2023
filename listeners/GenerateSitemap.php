<?php

namespace App\Listeners;

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;
use Illuminate\Support\Str;

class GenerateSitemap
{
    /**
     * Exclude paths from the sitemap.
     *
     * @var array<int, string>
     */
    protected const EXCLUDE = [
        '/assets/*',
        '*/favicon.ico',
        '*/404*',
    ];

    /**
     * Generate a sitemap.xml file.
     *
     * @param \TightenCo\Jigsaw\Jigsaw $jigsaw
     *
     * @return void
     */
    public function handle(Jigsaw $jigsaw): void
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');

        if (! $baseUrl) {
            echo PHP_EOL . 'To generate a sitemap.xml file, please specify a "baseUrl" in config.php.' . PHP_EOL;

            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())
            ->reject(static fn (string $path): bool => Str::is(self::EXCLUDE, $path))
            ->each(static function (string $path) use ($baseUrl, $sitemap): void {
                $sitemap->addItem(
                    location: rtrim($baseUrl, '/') . $path,
                    lastModified: time(),
                    changeFrequency: Sitemap::DAILY,
                );
        });

        $sitemap->write();
    }
}
