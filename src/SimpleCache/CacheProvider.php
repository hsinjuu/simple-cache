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

/**
 * 模擬使用情境
 * 
 * use Shieldon\SimpleCache\Cache;
 * use Shieldon\SimpleCache\Driver\Redis;
 
 * ================== Sample 1 : 模擬使用情境 ==================
 * class Main
 * {
 *   public function example()
 *    {
 *        $cache = new Cache('redis');
 *        $cache->set('foo', 'bar', 3600);
 *        
 *        echo $cache->get('foo');
 *        // echo: bar
 *     }
 * }
 *  ================== Samoke 2 : 配合依賴注入 =================
 * class Main
 * {
 *     public function example()
 *     {
 *         $redis = new Redis('127.0.0.1', 6379);
 * 
 *         $cache = new Cache($redis);
 *         $cache->set('foo', 'bar', 3600);
 * 
 *         echo $cache->get('foo');
 *         // echo: bar
 *     }
 * }
 *  ================== Samoke 3 : Driver建構子參數 ==============
 *  把 Driver 的建構子參數改成只接受一個陣列類型的參數吧。這樣使用者就可以只記得每個 Driver 只有一個參數，而參數的陣列欄位定義出明確的 key 值在文件中方便查閱。
 * 
 * class Main
 * {
 *     public function example()
 *     {
 *         $redis = new Redis([
 *             'host' => '127.0.0.1',
 *             'port' => 6379,
 *         ]);
 * 
 *         $cache = new Cache($redis);
 *         $cache->set('foo', 'bar', 3600);
 * 
 *         echo $cache->get('foo');
 *         // echo: bar
 *     }
 *     
 *     public function example2()
 *     {
 *         $sqlite = new Sqlite([
 *             'path' => '/home/app/writable',
 *         ]);
 * 
 *         $cache = new Cache($sqlite);
 *         $cache->set('foo2', 'bar2', 3600);
 * 
 *         echo $cache->get('foo2');
 *         // echo: bar2
 *     }
 */