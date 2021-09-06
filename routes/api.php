<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\MeiliSearch\Http\Controllers\Settings\Index;
use LaravelEnso\MeiliSearch\Http\Controllers\Settings\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/integrations/meilisearch/settings')
    ->as('integrations.meilisearch.settings.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::patch('{settings}', Update::class)->name('update');
    });
