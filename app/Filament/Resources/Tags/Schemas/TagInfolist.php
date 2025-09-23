<?php

namespace App\Filament\Resources\Tags\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Support\Enums\IconPosition;
use Filament\Infolists\Components\TextEntry;

class TagInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Tag")
                    ->collapsible()
                    ->persistCollapsed()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('name')
                            ->formatStateUsing(fn($state) => Str::title($state)),
                        TextEntry::make('slug')
                            ->hidden(),
                        TextEntry::make('views')
                            ->numeric()
                            ->icon('heroicon-o-eye')
                            ->iconPosition(IconPosition::After),
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
