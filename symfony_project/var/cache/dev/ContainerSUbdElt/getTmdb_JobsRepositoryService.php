<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tmdb.jobs_repository' shared service.

include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/AbstractRepository.php';
include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/JobsRepository.php';

return $this->services['tmdb.jobs_repository'] = new \Tmdb\Repository\JobsRepository(($this->services['tmdb.client'] ?? $this->getTmdb_ClientService()));
