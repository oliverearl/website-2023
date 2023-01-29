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
    I'm an experienced, industry-harden full-stack developer with a passion for clean, readable code and documentation,
    built upon a concrete academic foundation and additional years of classroom CS teaching experience.
  </p>

  <h2 class="mb-2">By day</h2>
  <p class="mb-6">
    I currently work as a software engineer at
    <a href="https://www.stickeetechnology.com" target="_blank">Stickee Technology</a>, with a serious interest in
    building robust and performative experiences on the web and beyond.
  </p>

  <p class="mb-6">
    In addition, I volunteer my time with the
    <a href="https://www.nightline.ac.uk" target="_blank">Nightline Association</a> as part of their software
    engineering team, where I have the pleasure of programming innovative IT and software solutions for student-led
    Nightlines across the UK.
  </p>

  <p class="mb-6">
    <strong>Some of the technologies I love working with:</strong> Laravel, Vue.js, Nuxt, Tailwind, TypeScript, and
    more recently, Inertia.js.
  </p>

  <h2 class="mb-2">By night</h2>
  <p class="mb-6">
    Mental health is a cause close to my heart. I am the twice elected Wales Regional Coordinator within the
    aforementioned Nightline Association; the aim of which is ensuring that all students have someone to talk to
    without judgment and in complete anonymity.
  </p>

  <p class="mb-6">
    After being severely unwell with COVID-19, I began work on
    <a href="https://www.github.com/extracontinue" target="_blank">ExtraContinue</a>, a website and app to help you
    organise messages and events should the unforeseeable occur. I’m hoping to have a working release by the end of the
    year.
  </p>

  <p class="mb-6">
    Lastly, I’m hoping to some day release numerous video games written in Godot under my indie game studio,
    <a href="https://www.petrobolos.com" target="_blank">Petrobolos</a>. Emphasis on some day!
  </p>
@endsection
