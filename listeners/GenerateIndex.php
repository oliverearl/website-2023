<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    /**
     * Generate an index.json file with all posts.
     *
     * @param \TightenCo\Jigsaw\Jigsaw $jigsaw
     *
     * @throws \JsonException
     *
     * @return void
     */
    public function handle(Jigsaw $jigsaw): void
    {
        $data = collect($jigsaw->getCollection('posts')->map(static fn (CollectionItem $page): array => [
            'title' => $page->title,
            'categories' => $page->categories,
            'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
            'snippet' => $page->getExcerpt(),
        ])->values());

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data, JSON_THROW_ON_ERROR));
    }
}
