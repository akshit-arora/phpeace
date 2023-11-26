<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\Console\Commands;

use AkshitArora\PHPeace\Facades\PHPeace;
use Illuminate\Console\Command;

/**
 * Class PHPeaceShowQuoteCommand
 *
 * This class is responsible for handling the "phpeace" console command which displays a quote for peace.
 * It uses the PHPeace facade to fetch a quote and formats it for console output.
 *
 * @package AkshitArora\PHPeace\Console\Commands
 */
final class PHPeaceShowQuoteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "phpeace";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Display a quote for peace";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->formatForConsole(PHPeace::getQuote());
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    private function formatForConsole($quote): string
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}
