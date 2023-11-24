---
title: About
description: A little bit about me
---
@extends('_layouts.main')

@section('body')
  <h1>About</h1>

  <img src="/assets/img/oliver.jpg"
       alt="{{ $page->siteName }}"
       class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10"
  />

  <p class="mb-6">
    Hi! I'm Ollie. I'm an experienced, industry-hardened software engineer with a passion for clean, performant, and
    test-backed code, built upon a concrete academic foundation and additional years of experience teaching computer
    science.
  </p>

  <p class="mb-6">
    This website is a humble scratchpad for all of my thoughts on software engineering, teaching, and other
    topics that are of interest to me. I used to blog more seriously and frequently on more popular platforms in the
    past, but this started to feel like a chore and <em>honestly </em>I'd rather spend my time coding than writing.
  </p>

  <h2 class="mb-2">By day</h2>
  <p class="mb-6">
    I currently work as a full-stack web developer at
    <a href="https://www.stickeetechnology.com" target="_blank">Stickee Technology</a>, the titanium arm of the company
    that builds the special projects that our big data clients need to thrive. There emerged my serious interest
    in building future-proof, inordinately tested, high performance experiences on the web and beyond, as well as
    maintaining and supporting many of our open source initiatives.
  </p>

  <p class="mb-6">
    <strong>Some of the technologies I love working with include:</strong> Laravel, Vue.js, Nuxt, Tailwind, TypeScript,
    and Inertia.js.
  </p>

  <h2 class="mb-2">By night</h2>
  <p class="mb-6">
    Mental health awareness and suicide intervention are causes close to my heart and as such I am a senior member of
    the <a href="https://www.nightline.ac.uk" target="_blank">Nightline Association</a>'s software development team;
    comprised entirely of volunteers. Providing the technology needed to ensure students across the country have
    someone to talk in an anonymous, judgement-free environment.
  </p>

  <p class="mb-6">
    After being severely unwell with COVID-19, I began work on
    <a href="https://www.github.com/extracontinue" target="_blank">ExtraContinue</a>, a website and app to help you
    organise messages and events should the unforeseeable occur. I’m hoping to have a working release by the end of the
    year.
  </p>

  <p class="mb-6">
    Lastly, I’m hoping to some day release numerous video games written in Godot under my indie game studio,
    <a href="https://www.petrobolos.com" target="_blank">Petrobolos</a>. Emphasis on <em>some day</em>!
  </p>

  <h2 class="mb-2">Still curious?</h2>
  <p class="mb-6">
    If you still want to learn more about my work, or are interesting in hiring me, I'd love it if you could reach out
    to me over on <a href="https://www.linkedin.com/in/oliverearl" target="_blank">LinkedIn</a>. Thanks so much!
  </p>
@endsection
