<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tmdb.search_repository' shared service.

include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/AbstractRepository.php';
include_once $this->targetDirs[3].'/vendor/php-tmdb/api/lib/Tmdb/Repository/SearchRepository.php';

return $this->services['tmdb.search_repository'] = new \Tmdb\Repository\SearchRepository(($this->services['tmdb.client'] ?? $this->getTmdb_ClientService()));