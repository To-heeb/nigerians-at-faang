<?php

namespace App\Filament\Resources\Industries\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class IndustryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Industry")
                    ->collapsible()
                    ->persistCollapsed()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('slug')
                            ->hidden(),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-')
                            ->hidden(),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-')
                            ->hidden(),
                    ])
            ]);
    }
}
