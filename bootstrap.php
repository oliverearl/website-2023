<?php
/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 *
 * @var $container \Illuminate\Container\Container
 * @var $events \TightenCo\Jigsaw\Events\EventBus
 */

$events->afterBuild(App\Listeners\GenerateSitemap::class);
$events->afterBuild(App\Listeners\GenerateIndex::class);
$events->afterCollections(App\Listeners\GenerateReadingTime::class);
