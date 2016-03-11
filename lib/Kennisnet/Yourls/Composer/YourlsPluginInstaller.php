<?php

namespace Kennisnet\Yourls\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class YourlsPluginInstaller extends LibraryInstaller
{
    
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $fullname = explode('/', $package->getPrettyName());
        $pluginName = $fullname[1];
        
        $yourlsPluginDir = 'yourls/user/plugins';
        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (!empty($extra['yourls-plugin-dir'])) {
                $yourlsPluginDir = $extra['yourls-plugin-dir'];
            }
        }        
        
        return $yourlsPluginDir . '/' . $pluginName;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'yourls-plugin' === $packageType;
    }

}