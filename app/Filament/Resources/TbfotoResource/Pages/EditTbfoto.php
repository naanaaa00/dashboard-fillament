<?php

namespace App\Filament\Resources\TbfotoResource\Pages;

use App\Filament\Resources\TbfotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTbfoto extends EditRecord
{
    protected static string $resource = TbfotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
