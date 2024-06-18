@extends('_layouts.main')

@section('body')
    <h1>Hey! I'm Ollie.</h1>

    <img src="/assets/img/oliver.jpg"
         alt="{{ $page->siteName }}"
         class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10"
    />

    <p class="mb-6">
      I'm an experienced, industry-hardened software engineer with a passion for clean, performant, and
      test-backed code, built upon a concrete academic foundation and additional years of experience teaching computer
      science.
    </p>

    <p class="mb-6">
      This website is a simple scratchpad for all of my thoughts on software engineering, teaching, and other
      topics that are of interest to me.
    </p>

    <p class="mb-6">
      <strong>Some of the technologies I love working with include:</strong> Laravel, Vue.js, Nuxt, Tailwind, TypeScript,
      and Inertia.js.
    </p>

    {{-- Featured Posts --}}
    @php $featuredPosts = $posts->where('featured', true); @endphp
    @if ($featuredPosts->isNotEmpty())
      <hr class="w-full border-b mt-2 mb-6" />
      <h2 class="mb-2">Featured Post</h2>

      @foreach ($featuredPosts as $post)
        <div class="w-full mb-6">
          @include('_components.post-preview-inline')
        </div>

        @if (! $loop->last)
          <hr class="border-b my-6" />
        @endif
      @endforeach
    @endif

    {{-- Other Posts --}}
    @php $regularPosts = $posts->where('featured', false); @endphp
    @if ($regularPosts->isNotEmpty())
      <hr class="w-full border-b mt-2 mb-6" />
      <h2 class="mb-2">Recent Posts</h2>

      @foreach ($regularPosts->where('featured', false)->take(4)->chunk(2) as $row)
          <div class="flex flex-col md:flex-row md:-mx-6">
              @foreach ($row as $post)
                  <div class="w-full md:w-1/2 md:mx-6">
                      @include('_components.post-preview-inline')
                  </div>

                  @if (! $loop->last)
                      <hr class="block md:hidden w-full border-b mt-2 mb-6" />
                  @endif
              @endforeach
          </div>

          @if (! $loop->last)
              <hr class="w-full border-b mt-2 mb-6" />
          @endif
      @endforeach
    @endif
@stop
