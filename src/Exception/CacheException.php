<?php

declare(strict_types=1);

namespace Hsinjuu\SimpleCache\Exception;

use Psr\SimpleCache\CacheException as CacheExceptionInterface;
use Exception;

class CacheException extends Exception implements CacheExceptionInterface
{

}