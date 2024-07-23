<?php

namespace FilamentSound\FilamentSound;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamnetSoundPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-sound-plugin';
    }

    public function register(Panel $panel): void
    {
        $resources = config('filament-sound.resources.sounds', []);
        $panel->resources($resources);
    }

    public function boot(Panel $panel): void
    {
        //
    }
 
    public static function make(): static
    {
        return app(static::class);
    }
    
    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }
}
