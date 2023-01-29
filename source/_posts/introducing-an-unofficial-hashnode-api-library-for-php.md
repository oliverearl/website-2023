---
extends: _layouts.post
section: content
title: Introducing an unofficial Hashnode API library for PHP
date: 2020-12-01
description: "Introducing a PHP library for the Hashnode API"
featured: false
cover_image: /assets/img/posts/introducing-an-unofficial-hashnode-api-library-for-php/cover.png
categories: [php, laravel, software-engineering]
---

When I heard about the [Hashnode Christmas Hackathon](https://townhall.hashnode.com/hashnode-christmas-hackathon), I
immediately began brainstorming ideas to develop something that members of the community might find useful, but would 
also be a great learning experience for me. After all, learning is at the heart of Hashnode.

In any case, after numerous scrapped ideas and half-baked prototypes (that I'll talk about in an upcoming article!) 
I decided that I would go in the direction of building a library - something that I have never done before, and using
PHP, a programming language that I'm quite familiar with. By working on this project, it was my ambition to learn more
about **GraphQL**, the technology that Hashnode's API (_Application Programming Interface_) utilises, and something 
I previously knew nothing about!

Enter, an unofficial PHP library for interacting with the Hashnode API in PHP.

## How can I use it?

### [Visit the GitHub Repository](https://github.com/oliverearl/php-hashnode)

**The library will be made available to install via Composer, the PHP package manager, once more core functionality 
is implemented.**

For now:

1) Clone the repository: (or download the [zip](https://github.com/oliverearl/php-hashnode))

```bash
git clone https://github.com/oliverearl/php-hashnode.git
```

2) Next, install its prerequisites using Composer:

```bash
cd php-hashnode
composer install
```

3) Following that, you can include the program in your own PHP code by including its autoloader that can be found in 
the `vendor` directory.

```php
require_once __DIR__ . '/vendor/autoload.php';
```

4) A client instance and a root query object can then easily be instantiated like thus:

```php
$client = new Hashnode();

$query = new RootQuery();
```

You can also specify a custom endpoint, or your Hashnode API token by adding it as a parameter to the Hashnode 
constructor:

```php
$client = new Hashnode('https://some-other-endpoint.hashnode.com', [
  'Authorization' => 'token-goes-here'
]);
```

For more information on how to use the library, including how to retrieve data from the API, I strongly encourage you 
to view the [repository's README](https://github.com/oliverearl/php-hashnode)! I hope to write more in-depth 
documentation soon as it's on the development roadmap!

You do need PHP 7.4 (or above) for the time being. Sorry about that!

## Is it complete?

Almost. I really wanted to have it completely done before New Year's Day, but truth be told I have had other 
responsibilities and familial commitments throughout the winter break that limited my free time. I hope you can 
understand!

_However, all functionality to retrieve information from Hashnode is complete!_

![Stories to Bootstrap Album](/assets/img/posts/introducing-an-unofficial-hashnode-api-library-for-php/stories.jpeg)

> An example of using the API to pull stories data into a Bootstrap 5 album

## The development process

Originally, I wanted to develop something that was similar to how Laravel works with its models, where you could say
`$post->get();` and retrieve something, but this is currently out-of-my-depth and is something I'm hoping to be able to
do in the future with more learning. I used a GraphQL client library for PHP and attempted to use the repository pattern
to build ways of wrapping queries in method calls, but I realised that it would be impossible to build flexible GraphQL
queries in the way that I wanted.

## My gripes with GraphQL

One of the things I found most frustrating with GraphQL as part of its inherent design.

**You only get what you request.**

This wasn't like what I was used to when working with RESTful APIs where I could retrieve everything that I wanted by
accessing the appropriate endpoint. Instead, there was one endpoint, and I had to build the appropriate query. I was
immensely frustrated at my lack of knowledge and knew I had to find another way.

I remember getting so angry that I accused GraphQL of being **'rehashed SOAP with JSON'** and retiring to bed. After a 
good night's sleep, I realised that I was just ignorant of what I didn't fully understand - and that's okay. So I got
back to work on the project, but knew I need a new approach.

![A frustrated programmer](/assets/img/posts/introducing-an-unofficial-hashnode-api-library-for-php/frustrated.jpg)

_If you're curious, you can see this attempt in the v1 branch of the repository._

### Enter the GraphQL OQM library.

After a bit of research, I found the author of the GraphQL library had also developed another library for working with 
objects mapped to queries, or OQM (Object-Query Mapping). With this library, I was able to generate and map queries and 
arguments into classes of their own. Whilst this sounds straightforward, I spent a lot of time rewriting the code into 
PHP 7.4 typed code and organising things into a structure that was easy to work with for someone who is relatively new
to object-oriented PHP.

### Without discipline, agile methodologies can collapse

One of the most important things I learned studying software engineering is that successful software projects require 
a careful balance of discipline and agility.

Without agility, you're basically working to a methodology like Waterfall where the process is too rigid.

Without discipline, you're just hacking code together and abandoning the process and any kind of planning. Mistakes and 
problems can then creep in.

I try to use Test-Driven Development (TDD) in all of my projects, where I will write tests and then get them to pass by 
implementing the required behaviour. By the time I went back to the drawing board and started again from scratch using
the OQM library, I was writing and modifying code without testing it properly, so I had to go back and write tests 
afterwards. This is less than ideal, and I'm hoping to have more thorough test coverage and integration tests going
forward. But since I was working solo, it wasn't a fatal mistake to make.

## What remains and how you can get involved

This project is something that I want to keep working on in the future! There is still some work to be done (a full list
is available on the repository readme) and there are undoubtedly areas where the code can be improved, or maybe there 
are bugs.

If you want to get involved, some key areas that need implementing are:

- Documentation! I haven't had the time to write a great deal of documentation, but if you're a keen writer, this would
be a great place to help out.
- Integration tests - while a (semi-complete) suite of unit tests exist, more elaborate tests that test against full 
queries need to be orchestrated.
- Implementation of code that performs server-side mutation - in other words, we can currently retrieve data, but
updating, deleting, and creating data is yet to be done!
- Build some single-file examples of the API doing cool things and pull requesting them to join the `examples` directory!

## What I learned

Despite me starting a new PHP software engineering job this January and having confidently worked with PHP and Laravel 
on a number of projects throughout my career I felt relatively out-of-my-depth this time. I realised that it was okay 
to not know absolutely everything and that I shouldn't get too frustrated when I can't wrap my head around a concept the
first time around. Something that I should probably know better by now.

I learned that although I was frustrated with GraphQL for not being able to just _retrieve everything_ that I wanted,
I did acknowledge that it's incredibly efficient as it does just that. Returns what you want.

## Conclusions

I hope you enjoyed my little write-up and I hope you enjoy playing with the Hashnode PHP library as much as I did
developing it! Of course, it's not perfect and I'm not the best programmer going, so if you can help me improve it,
I would love your help and hope to see you on GitHub!

Thanks again to everyone at Hashnode and I hope that you have had a wonderful holiday season and a merry Christmas to 
those celebrating. Have a safe and fun New Year's Eve and I'll see you in 2021!
