<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
      @foreach ($page->collections->pages as $name => $href)
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="{{ $href }}"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive($name) ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >{{ $name }}</a>
        </li>
      @endforeach
    </ul>
</nav>
