<div class="flex flex-col mb-4">
    <p class="text-gray-700 font-medium my-2">
        <time datetime="{{ $post->getDate()->format('Y-m-d') }}">{{ $post->getDate()->format('F j, Y') }}</time>
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>

  <p class="text-gray-700 text-xl md:mt-0" >
    @foreach($post->categories as $category)
      <a class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px" href="/blog/categories/{{ $category }}">
        {{ str($category)->headline() }}
      </a>
    @endforeach
  </p>
</div>
