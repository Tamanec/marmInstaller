<?php

namespace marm\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package)
	{
		$packageName = explode('/', $package->getPrettyName());
		$moduleName = $packageName[1];

		return "modules/{$moduleName}";
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'marm-module' === $packageType;
	}
}