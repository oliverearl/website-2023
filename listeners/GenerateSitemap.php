<?php

declare(strict_types=1);

namespace App\Listeners;

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;
use Illuminate\Support\Str;

final class GenerateSitemap
{
    /**
     * Files and folders to be excluded from the sitemap. Wildcard characters * supported.
     *
     * @var array<int, string>
     */
    private array $exclude = [
        '/assets/*',
        '*/favicon.ico',
        '*/404*'
    ];

    /**
     * Generate the sitemap.
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
            ->reject(fn(?string $path): bool => $this->isExcluded($path))
            ->each(function (?string $path) use ($baseUrl, $sitemap): void {
                $sitemap->addItem(rtrim($baseUrl, '/') . $path, time(), Sitemap::DAILY);
        });

        $sitemap->write();
    }

    /**
     * Returns whether a given path is in the excluded array.
     */
    public function isExcluded(?string $path): bool
    {
        return Str::is($this->exclude, $path);
    }
}
