<?php

declare(strict_types=1);

namespace Hsinjuu\SimpleCache\Exception;

use Psr\SimpleCache\InvalidArgumentException as InvalidArgumentExceptionInterface;
use InvalidArgumentException;

class CacheArgumentException extends InvalidArgumentException implements InvalidArgumentExceptionInterface
{

}