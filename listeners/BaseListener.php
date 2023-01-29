<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

abstract class BaseListener
{
    /**
     * Handle the event.
     *
     * @param \TightenCo\Jigsaw\Jigsaw $jigsaw
     *
     * @return void
     */
    abstract public function handle(Jigsaw $jigsaw): void;
}
