<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Artisan;
use Filament\Notifications\Notification;

class SitemapGenerator extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.sitemap-generator';
    protected static ?string $navigationLabel = 'Генериране на Sitemap';
    protected static ?string $title = 'Генериране на Sitemap';

    protected function getActions(): array
    {
        return [
            Action::make('Генерирай Sitemap')
                ->color('success')
                ->icon('heroicon-o-plus-circle')
                ->action(function () {
                    Artisan::call('sitemap:generate');

                    Notification::make()
                        ->title('Успешно!')
                        ->body('Sitemap беше генериран успешно.')
                        ->success()
                        ->send();
                }),
        ];
    }
}
