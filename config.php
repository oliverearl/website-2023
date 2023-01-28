<?php

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\PageVariable;

return [
    'baseUrl' => 'http://localhost',
    'production' => false,
    'siteName' => 'Oliver Earl',
    'siteDescription' => 'UK based software engineer and qualified CS teacher.',
    'siteAuthor' => 'Oliver Earl',
    'siteKeywords' => implode(',', ['Software Engineer', 'Laravel', 'Vue.js', 'PHP', 'JavaScript']),
    'twitterHandle' => '@oliverrte',

    // Collections
    'collections' => [
        'posts' => [
            'author' => 'Oliver Earl', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => static fn (CollectionItem $page, PageVariable $allPosts) => $allPosts->filter(
                static fn (CollectionItem $post) => $post->categories && in_array($page->getFilename(), $post->categories, true),
            ),
        ],
    ],

    // Helpers
    'isActive' => static fn (PageVariable $page, string $path): bool => (
        Str::endsWith(trimPath($page->getPath()), trimPath($path))
    ),

    'getDate' => static fn (CollectionItem $page): DateTimeImmutable => (
        DateTimeImmutable::createFromFormat('U', $page->date)
    ),

    'getExcerpt' => static function (CollectionItem $page, int $length = 255): string {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
