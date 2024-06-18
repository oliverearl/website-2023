<?php

declare(strict_types=1);

namespace App\Listeners;

use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\Jigsaw;

final class GenerateIndex
{
    /**
     * Generates indices for site search functionality.
     */
    public function handle(Jigsaw $jigsaw): void
    {
        $data = collect($jigsaw->getCollection('posts')->map(fn(CollectionItem $page): array => [
            'title' => $page->title,
            'categories' => $page->categories,
            'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
            'snippet' => $page->getExcerpt(),
        ])->values());

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));
    }
}
