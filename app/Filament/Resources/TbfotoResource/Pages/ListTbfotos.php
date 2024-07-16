<?php

namespace App\Filament\Resources\TbfotoResource\Pages;

use App\Filament\Resources\TbfotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTbfotos extends ListRecords
{
    protected static string $resource = TbfotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
