<?php

namespace LaravelEnso\MeiliSearch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use LaravelEnso\Helpers\Casts\Encrypt;
use LaravelEnso\Rememberable\Traits\Rememberable;

class Settings extends Model
{
    use HasFactory, Rememberable;

    protected $table = 'meilisearch_settings';

    protected $guarded = ['id'];

    protected array $rememberableKeys = ['id'];

    protected $casts = [
        'enabled' => 'boolean',
        'master_key' => Encrypt::class,
    ];

    private static self $instance;
    private static bool $initialized = false;

    public function configured(): bool
    {
        return $this->host !== null && $this->master_key !== null;
    }

    public static function current()
    {
        return self::$instance
            ??= self::cacheGet(1)
            ?? self::factory()->create();
    }

    public static function host()
    {
        return self::current()->host;
    }

    public static function masterKey()
    {
        return self::current()->master_key;
    }

    public static function enabled()
    {
        return self::current()->enabled;
    }

    public static function initialize(): void
    {
        if (! self::$initialized && self::enabled()) {
            Config::set('scout.driver', 'meilisearch');
            Config::set('scout.meilisearch.host', self::host());
            Config::set('scout.meilisearch.key', self::masterKey());
            self::$initialized = true;
        }
    }
}
