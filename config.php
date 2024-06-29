<?php

declare(strict_types=1);

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\PageVariable;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Oliver Earl',
    'siteDescription' => 'UK based software engineer and qualified CS teacher.',
    'siteAuthor' => 'Oliver Earl',
    'siteKeywords' => implode(',', ['Software Engineer', 'Laravel', 'Vue.js', 'PHP', 'JavaScript', 'TypeScript']),

    'collections' => [
        'pages' => [
            'About' => '/about',
            'Blog' => '/blog',
            'Projects' => '/projects',
            'Publications' => '/publications',
            'Startups' => '/start-ups',
            'Talks' => '/talks',
        ],
        'posts' => [
            'author' => 'Oliver Earl', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'projects' => require_once 'projects.php',
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => fn(CollectionItem $page, PageVariable $allPosts) => $allPosts->filter(
                fn(CollectionItem $post) => $post->categories && in_array($page->getFilename(), $post->categories, true),
            ),
        ],
    ],

    'switches' => [
        'projects' => true,
        'publications' => false,
        'startups' => true,
        'talks' => false,
    ],

    'getDate' => fn(CollectionItem $page): DateTimeImmutable => (
        DateTimeImmutable::createFromFormat('U', (string) $page->date)
    ),

    'getExcerpt' => function (CollectionItem $page, int $length = 255): string {
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

    'isActive' => fn(PageVariable $page, string $path): bool => (
        Str::endsWith(trimPath($page->getPath()), trimPath(Str::lower($path)))
    ),
];
