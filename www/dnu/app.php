<?php

require_once __DIR__.'/../../apps/sf2/app/bootstrap.php.cache';
require_once __DIR__.'/../../apps/sf2/app/AppKernel.php';
//require_once __DIR__.'/../../apps/sf2/app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$kernel->handle(Request::createFromGlobals())->send();
