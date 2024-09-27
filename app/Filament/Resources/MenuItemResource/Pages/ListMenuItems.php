<?php

namespace App\Filament\Resources\MenuItemResource\Pages;

use App\Filament\Resources\MenuItemResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListMenuItems extends ListRecords
{
    protected static string $resource = MenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'some' => Tab::make(),
        ];
    }
}
