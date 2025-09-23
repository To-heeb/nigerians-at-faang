<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class CompanyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Company")
                    ->collapsible()
                    ->persistCollapsed()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        ImageEntry::make('mini_logo')
                            ->label('Logo')
                            ->disk('company')
                            ->defaultImageUrl(fn($record) => $record->mini_logo ? cdn_image('storage/company/' . $record->mini_logo) : "https://img.icons8.com/dotty/80/company.png"),
                        TextEntry::make('name'),
                        TextEntry::make('slug')
                            ->hidden(),
                        TextEntry::make('about')
                            ->columnSpanFull()
                            ->placeholder('No about provided')
                            ->html(),
                        TextEntry::make('founded_at')
                            ->icon('heroicon-o-calendar-date-range'),
                        TextEntry::make('headquarters')
                            ->icon('heroicon-o-map-pin'),
                        TextEntry::make('website')
                            ->url(fn($record) => $record->website, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('information_website')
                            ->url(fn($record) => $record->information_website, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('career_page_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->career_page_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('linkedin_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->linkedin_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('twitter_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->twitter_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('youtube_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->youtube_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('wikipedia_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->wikipedia_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('logo')
                            ->columnSpanFull()
                            ->hidden(),
                        TextEntry::make('mini_logo')
                            ->columnSpanFull()
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
