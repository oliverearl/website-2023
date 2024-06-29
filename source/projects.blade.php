---
title: Projects
description: My current portfolio of projects, in and out of employment, and open source works.
---
@extends('_layouts.main')

@section('body')
  @if ($page->switches['projects'])
    <div class="container mx-auto px-4 py-8 shadow-lg rounded-md">
      <h1>Projects</h1>

      <div class="flex flex-col md:flex-row md:space-x-4">
        <div class="md:w-1/4 mb-4 md:mb-0 mr-3">
          <ul class="flex flex-col space-y-2 list-none">
            @foreach ($page->collections->projects as $name => $projects)
              <li class="border-b">
                <button
                  onclick="showTab({!! $loop->index !!})"
                  id="tab-{!! $loop->index !!}"
                  class="w-full p-2 rounded-md bg-blue-500 text-white transition-colors duration-200 mb-2"
                >
                  {{ $name }}
                </button>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="md:w-3/4">
          @foreach ($page->collections->projects as $name => $projects)
            <div id="content-{!! $loop->index !!}" class="p-4 shadow-md rounded-md">
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($projects as $project)
                  @if ($loop->first)
                    <h3 class="text-2xl font-semibold">{{ $name }}
                      @isset ($project['period'])
                        <br/>
                        <small class="font-light">{{ $project['period'] }}</small>
                      @endisset
                    </h3>
                    <div class="text-gray-700 mb-4">
                      {!! $project['description'] !!}
                      <hr class="border-b my-6" />
                    </div>
                  @else
                    <div class="p-4 white rounded-lg shadow-md">
                      <h3 class="text-xl font-semibold mb-2">{{ $project['name'] }}</h3>
                      <div class="text-gray-700 mb-4">
                        {!! $project['description'] !!}
                      </div>
                      @empty ($project['closed'])
                        <a href="{{ $project['href'] }}" class="text-blue-500 hover:underline">View</a>
                      @endempty
                      <p class="text-gray-700 text-xl mt-2" >
                        @foreach ($project['technologies'] as $technology)
                          <a
                            class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                            href="/blog/categories/{{ str($technology)->lower()->slug() }}"
                          >
                            {{ $technology }}
                          </a>
                        @endforeach
                      </p>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <script>
      /** Honestly, I couldn't be bothered to mess around to get more Vue components on here. **/
      function showTab(index) {
        const tabs = document.querySelectorAll('[id^="tab-"]');
        const contents = document.querySelectorAll('[id^="content-"]');

        tabs.forEach((tab, i) => {
          if (i === index) {
            tab.classList.remove('bg-gray-100', 'text-gray-800');
            tab.classList.add('bg-blue-500', 'text-white');
          } else {
            tab.classList.remove('bg-blue-500', 'text-white');
            tab.classList.add('bg-gray-100', 'text-gray-800');
          }
        });

        contents.forEach((content, i) => {
          if (i === index) {
            content.classList.remove('hidden');
          } else {
            content.classList.add('hidden');
          }
        });
      }

      document.addEventListener('DOMContentLoaded', function() {
        showTab(0);
      });
    </script>
  @endif
@endsection
