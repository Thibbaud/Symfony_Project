<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tmdb.configuration_repository' shared service.

include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/AbstractRepository.php';
include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/ConfigurationRepository.php';

return $this->services['tmdb.configuration_repository'] = new \Tmdb\Repository\ConfigurationRepository(($this->services['tmdb.client'] ?? $this->getTmdb_ClientService()));