<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';
include "config/db.php";

return ConsoleRunner::createHelperSet($entityManager);