<?php

declare(strict_types=1);

namespace Hsinjuu\SimpleCache;

use Psr\SimpleCache\CacheInterface;

abstract class CacheProvider implements CacheInterface
{
    public function get($key, $default = null)
    {

    }

    public function set($key, $value, $ttl = null)
    {

    }

    public function delete($key)
    {

    }

    public function clear()
    {

    }

    public function has($key)
    {
        
    }

    public function getMultiple($keys, $default = null)
    {
        
    }

    public function setMultiple($values, $ttl = null)
    {

    }

    public function deleteMultiple($keys)
    {

    }
}