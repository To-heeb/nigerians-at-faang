<?php

namespace App\Filament\Resources\Industries\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class IndustryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(static::form());
    }

    public static function form(): array
    {
        return [
            Section::make('Industry')
                ->description('Provide essential details for the industry.')
                ->icon('heroicon-o-briefcase')
                ->collapsible()
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->readOnly()
                        ->dehydrated(false),
                ])
        ];
    }
}
