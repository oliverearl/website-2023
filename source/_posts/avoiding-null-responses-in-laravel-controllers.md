---
extends: _layouts.post
section: content
title: Avoiding void responses in Laravel controllers
date: 2022-08-10
description: The problems with returning void in Laravel HTTP controllers.
featured: true
cover_image: /assets/img/posts/avoiding-void-responses-in-laravel-controllers/cover.jpg
categories: [php, laravel, software-engineering]
---

If there's one thing you can depend on Laravel for, it's ensuring that your controllers return a response back to 
the client.

Whether you're explicitly returning responses using the `response()` helper, or depending on Laravel's magic to 
convert arrays and collections into JSON, the two things that these strategies have in common is *explicitness*. You're 
explicitly returning a type of response to the client, and as a result you, your colleagues, and Laravel all understand 
what is expected.

But then let's take the following snippet of code as an example where this principle is broken. Not the most practical, 
but something you might see in a controller:

```php
public function delete(Request $request, User $user): void
{
    if (auth()->check() && $user->isAdmin()) {
      $user->delete();
    }
}
```

Ignoring the authorisation here, what's wrong with this method?

**It doesn't return anything.**

Of course, Laravel is still able to work with this. It'll send a default response with a 200 OK status code 
(assuming we didn't run into any exceptions) and call it a day. It's quite likely that the developer intends for the 
response to be this way, and any front-ends talking to this endpoint are happy provided they get a successful response 
code, especially given that in this example, we're handing a `DELETE` request.

As you can see though, we're making assumptions. Did the developer *actually* intend to return nothing, and is a 
200 status code the most applicable in this scenario? What if Laravel's behaviour changes in later revisions? This 
means we'd have to check for any controllers that return void and potentially change their behaviour, and/or the 
implementations that work with them.

So what in my opinion should you do in this situation? Simply responding with an empty response, or even better, with a 
`response()->noContent()` would be more *explicit* about what you intend to do to all involved. Better than a comment, 
and better than relying on default behaviours.

Just my two cents about void controllers, and would love to hear from other developers who agree or disagree and why.
