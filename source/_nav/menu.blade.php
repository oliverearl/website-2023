<nav class="hidden lg:flex items-center justify-end text-lg">
  @foreach ($page->collections->pages as $name => $href)
    @php $key = str($name)->lower()->toString(); @endphp
    @unless ($page->switches?->$key === false)
      <a title="{{ $page->siteName }} {{ $name }}" href="{{ $href }}"
         class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive($name) ? 'active text-blue-600' : '' }}">
        {{ $name }}
      </a>
    @endunless
  @endforeach
</nav>
