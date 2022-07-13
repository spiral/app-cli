<?php

/**
 * This file is part of Spiral package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
    protected const NAME        = 'welcome';
    protected const DESCRIPTION = 'Welcome command';
    protected const ARGUMENTS   = [
        ['name', InputArgument::OPTIONAL, 'Name', 'User'],
    ];

    /**
     * This method supports argument injection.
     */
    public function perform(): int
    {
        $this->sprintf(
            'Welcome, <fg=green>%s</fg=green>!',
            $this->argument('name')
        );

        return self::SUCCESS;
    }
}
