<?php

namespace App\Filament\Resources\GuestBookResource\Pages;

use App\Filament\Resources\GuestBookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGuestBook extends CreateRecord
{
    protected static string $resource = GuestBookResource::class;

    // Diarahkan ke halaman daftar setelah dibuat
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
