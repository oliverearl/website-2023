<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
  <meta name="keywords" content="{{ $page->siteKeywords }}">

  <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
  <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
  <meta property="og:url" content="{{ $page->getUrl() }}"/>
  <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

  <meta name=twitter:url content="{{ $page->getUrl() }}">
  <meta name=twitter:title content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
  <meta name=twitter:image content="">
  <meta name=twitter:card content="summary_large_image">
  <meta name=twitter:site content="{{ $page->twitterHandle }}">

  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icons/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icons/favicon-32x32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/icons/apple-touch-icon-60x60-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/icons/apple-touch-icon-76x76-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/icons/apple-touch-icon-120x120-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/icons/apple-touch-icon-144x144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/icons/apple-touch-icon-152x152-precomposed.png" />
  <link rel="mask-icon" href="/assets/images/icons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="manifest" href="/site.webmanifest">

  <meta name="application-name" content="{{ $page->siteName }}"/>
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="msapplication-TileImage" content="/assets/images/icons/mstile-144x144.png" />
  <meta name="msapplication-square150x150logo" content="/assets/images/icons/mstile-150x150.png" />
  <meta name="theme-color" content="#000000" />

  <link rel="home" href="{{ $page->baseUrl }}">
  <link rel="icon" href="/favicon.ico">
  <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

  @if ($page->production)
    <!-- Insert analytics code here -->
  @endif

  <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

  <link rel="home" href="{{ $page->baseUrl }}" />
  <link rel="icon" href="/favicon.ico" />
  <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed" />

  @if ($page->production)
    {{-- Analytics code goes here! --}}
  @endif

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet" />
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" />
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
<header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
  <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
    <div class="flex items-center">
      <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
        <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.jpg" alt="{{ $page->siteName }} logo" />
        <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ $page->siteName }}</h1>
      </a>
    </div>

    <div id="vue-search" class="flex flex-1 justify-end items-center">
      <search></search>

      @include('_nav.menu')

      @include('_nav.menu-toggle')
    </div>
  </div>
</header>

@include('_nav.menu-responsive')

<main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
  @yield('body')
</main>

<footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
  <ul class="flex flex-col md:flex-row justify-center list-none">
    <li class="md:mr-2">
      &copy; {{ date('Y') }} Oliver Earl. All rights reserved.
    </li>

    <li>
      Powered by <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten" target="_blank">Jigsaw</a>.
    </li>
  </ul>
</footer>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

@stack('scripts')
</body>
</html>

