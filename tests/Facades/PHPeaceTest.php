<?php

declare(strict_types=1);

use AkshitArora\PHPeace\Facades\PHPeace;

it('can show a quote', function () {
    expect(PHPeace::getQuote())->toBeString();
});
