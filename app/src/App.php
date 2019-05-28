<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */
declare(strict_types=1);

namespace App;

use Spiral\Bootloader;
use Spiral\Framework\Kernel;

class App extends Kernel
{
    /*
     * List of components and extensions to be automatically registered
     * within system container on application start.
     */
    protected const LOAD = [
        Bootloader\DebugBootloader::class,
        Bootloader\CommandBootloader::class
    ];
}