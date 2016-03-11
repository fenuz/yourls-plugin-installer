<?php

namespace Kennisnet\Yourls\Composer;


use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class YourlsPluginInstallerPlugin implements PluginInterface
{

    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new YourlsPluginInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}