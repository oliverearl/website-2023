<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\Jigsaw;

class GenerateReadingTime extends BaseListener
{
    /**
     * Words per minute to use for calculating reading time.
     *
     * @var int
     */
    public const WPM = 200;

    /**
     * Generate a reading time for each post.
     *
     * @param \TightenCo\Jigsaw\Jigsaw $jigsaw
     *
     * @return void
     */
    public function handle(Jigsaw $jigsaw): void
    {
        $jigsaw->getCollection('posts')->map(function (CollectionItem $post): void {
            $post->estimate_reading_time = $this->generateReadingTime($post->getContent());
        });
    }

    /**
     * Generate a reading time for a given text.
     *
     * @param string $text
     *
     * @return string
     */
    private function generateReadingTime(string $text): string
    {
        $minutes = ceil(str_word_count(strip_tags($text)) / self::WPM);

        return "{$minutes} min read";
    }
}
