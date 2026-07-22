<?php

declare(strict_types=1);

use BasePanels\BasePanels\BasePanels;

it('resolves the singleton', function () {
    expect(app(BasePanels::class))->toBeInstanceOf(BasePanels::class);
});

it('returns the same instance from the container', function () {
    expect(app(BasePanels::class))->toBe(app(BasePanels::class));
});

it('merges the package config', function () {
    expect(config('base-panels.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('base-panels::messages.placeholder'))->toBe('BasePanels placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('base-panels::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('base-panels:placeholder')
        ->expectsOutputToContain('BasePanels placeholder command executed.')
        ->assertSuccessful();
});
