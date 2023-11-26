<?php

declare(strict_types=1);

use AkshitArora\PHPeace\Console\Commands\PHPeaceShowQuoteCommand;

it('can show a quote', function () {
    $this
        ->artisan(PHPeaceShowQuoteCommand::class)
        ->assertSuccessful();
});
