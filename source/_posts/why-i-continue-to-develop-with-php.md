---
extends: _layouts.post
section: content
title: Why I continue to develop with PHP
date: 2020-09-29
description: "Why I continue to develop with the PHP programing language in the year 2020"
featured: false
cover_image: /assets/img/posts/why-i-continue-to-develop-with-php/cover.jpg
categories: [php, laravel, software-engineering]
---

I have no doubt that if you work in any realm of software engineering, or have at the very least spent enough time on
Twitter, you'll have encountered the seemingly endless cycles of arguments about what programming language, framework, 
or paradigm is best, and why everyone else is wrong.

PHP is no stranger to being a point of contention among different factions of web developers and is sometimes depicted 
as ancient, labouring technology. In reality, this is so far from the truth that it's astonishing.

## Why do people dislike it?

Some people can't even give you an answer! It's just fun to make fun of it. Though many do have genuine and 
understandable answers. A great deal of PHP code is written terribly, without conforming to the accepted standards 
that make working with the language, especially in corporate environments, significantly easier. Even common frameworks
like CodeIgniter and the ubiquitous WordPress are guilty of this, hence the derision. Other codebases don't make use
of modern PHP functionality and suffer as a result.

A lot of other ridicule comes from lack of consistency in older function naming conventions and quirks of the language
itself, but I really feel that this is grasping at straws at most, and such criticisms could be directed at other 
languages like JavaScript too, that aren't flawless.

## Node.js isn't king, yet

Node.js, the JavaScript runtime powering many web applications is an insanely powerful tool with great frameworks to 
boot. It's incredibly popular and is sometimes credited with being the future of all web development - JavaScript across
the entire stack.

This, of course, doesn't mean that PHP (and indeed other languages) are being forced out. Languages like PHP
(and Python, Ruby, etc.) have diverse and mature ecosystems that power everything from simple blogs to large eCommerce
monoliths. Let's look at the statistics:

![PYPL Index](/assets/img/posts/why-i-continue-to-develop-with-php/pypl.jpeg)

The [PYPL index](http://pypl.github.io/PYPL.html) indicates that JavaScript sits at #3, and PHP shortly trails at #4,
from this time of writing.

![TIOBE Index](/assets/img/posts/why-i-continue-to-develop-with-php/tiobe.jpeg)

According to the [TIOBE index](https://www.tiobe.com/tiobe-index/), PHP continues to rise, sitting at around tenth
place at the time of this writing.

Bare in mind, this includes usage of JavaScript across the **entire** stack, including front-end, where it remains
an integral building block of the web.

## The rise of Laravel... and WordPress

<blockquote class="twitter-tweet"><p dir="ltr" lang="en">Backend Frameworks with the most stars on GitHub:<br><br>1. Laravel - 61.6K⭐️<br>2. Django - 52.1K⭐️<br>3. Flask - 52.1K⭐️<br>4. Spring Boot - 50.8K⭐️<br>5. Express - 50.2K⭐️<br>6. Ruby on Rails - 46.5K⭐️<br>7. Meteor - 42K⭐️<br>8. Nest - 30.5K⭐️<br>9. Koa - 30K⭐️<br><br>Which one is your favorite?</p>— Marko ⚡ Denic (@denicmarko) <a href="https://twitter.com/denicmarko/status/1309714816290951168?ref_src=twsrc%5Etfw">September 26, 2020</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

The Laravel web framework, despite being relatively new, has skyrocketed its way to stardom on GitHub. This naturally 
isn't representative of its usage, but its MVC, Rails-like architecture, command-line interface _Artisan_, database
interactivity via object-relational mapping, templating engine, and testing suite for robust Test-Driven Development
all out of the box, it's a Swiss army knife that makes development not just easy, but immensely fast. I routinely make
use of this framework, so I'm biased, but I highly recommend it.

![WordPress usage statistics](/assets/img/posts/why-i-continue-to-develop-with-php/wordpress.jpeg)

For better, or for worse, WordPress continues to [climb in usage](https://trends.builtwith.com/cms/WordPress). It's easy
to set up, its assortment of plugins and themes are unparalleled across all content management systems (CMS), and to its
credit, has been working hard to rectify many of its historical security problems. The rise of JAMstack and static site
generators have arguably made WordPress even more popular - by utilising it as an easy-to-use headless CMS that exposes
its API to hydrate rapidly loading front-ends. Of course, if you're looking to make money, then coding your own plugins
and themes will remain profitable.

## Okay I'm convinced! What now?

PHP is a fun and useful programming language to have in your arsenal, but don't take my advice for it, go and explore the
elephant ecosystem for yourself! I strongly recommend the following learning resources for getting on your way:

- [Codecademy](https://www.codecademy.com/learn/learn-php) is ideal for absolute beginners who want to learn language
syntax without needing to install the language.
- [PHP The Right Way](https://phptherightway.com/) is something you should keep on hand at all stages of your career -
it will remind you of the best ways to do things and common pitfalls to avoid. **It will also guide you on how to 
install the language and package manager, Composer, on your operating system.**
- [Laracasts](https://www.laracasts.com) is an incredible learning resource for both PHP and Laravel, with plenty of 
free learning paths for you to sample. I highly recommend a paid subscription if you're serious about PHP. Great for 
Vue.js too.
- [Codecourse](https://codecourse.com) is another strong contender with plenty of free resources on PHP, Laravel, and 
other popular microframeworks.
- [PHP.net](https://www.php.net/docs.php) and of course, the language's actual documentation.

## Final thoughts

Ultimately, my _tl;dr_ answer for why I develop using PHP in 2020 is because I like it. I grew up with it - and it 
remains and continues to mature as a respected and powerful tool on the Internet. This article's purpose isn't to 
discredit other languages, like JavaScript, but to reaffirm PHP's place among them, and to serve as a reminder that it
isn't going anywhere anytime soon, regardless of how many 
[_paamayim nekudotayim_](https://en.wikipedia.org/wiki/Scope_resolution_operator#PHP) jokes you make!
