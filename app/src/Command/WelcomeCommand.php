<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace App\Command;

use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Command will be automatically located by the framework.
 */
class WelcomeCommand extends Command
{
    protected const NAME        = "welcome";
    protected const DESCRIPTION = "Welcome command";
    protected const ARGUMENTS   = [
        ['name', InputArgument::OPTIONAL, 'Name', 'User']
    ];

    /**
     * This method supports argument injection.
     */
    public function perform()
    {
        $this->sprintf(
            "Welcome, <fg=green>%s</fg=green>!",
            $this->argument('name')
        );
    }
}
