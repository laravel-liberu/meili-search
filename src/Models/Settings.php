<?php

namespace LaravelLiberu\MeiliSearch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Rememberable\Traits\Rememberable;

class Settings extends Model
{
    use HasFactory, Rememberable;

    protected $table = 'meilisearch_settings';

    protected $guarded = ['id'];

    protected array $rememberableKeys = ['id'];

    protected $casts = ['enabled' => 'boolean'];

    private static self $instance;

    public static function current()
    {
        return self::$instance
            ??= self::cacheGet(1)
            ?? self::factory()->create();
    }

    public static function enabled()
    {
        return self::current()->enabled;
    }
}
