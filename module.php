<?php
declare(strict_types=1);

/**
 * See LICENSE.md file for further details.
 */
namespace MagicSunday\Webtrees;

use Composer\Autoload\ClassLoader;
use MagicSunday\Webtrees\FanChart\Module;

// Register our namespace
$loader = new ClassLoader();
$loader->addPsr4(
    'MagicSunday\\Webtrees\\FanChart\\',
    __DIR__ . '/src'
);
$loader->register();

return app(Module::class);
