<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Support\Enums\IconPosition;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ProfileInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Profile")
                    ->collapsible()
                    ->persistCollapsed()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('slug')
                            ->hidden(),
                        ImageEntry::make('image')
                            ->circular()
                            ->disk('profile')
                            ->defaultImageUrl(fn($record) => $record->image ? cdn_image('storage/profile/' . $record->image) : cdn_image('storage/profile/avatar-head-profile.webp')),
                        TextEntry::make('job_title'),
                        TextEntry::make('views')
                            ->numeric()
                            ->icon('heroicon-o-eye')
                            ->iconPosition(IconPosition::After),
                        TextEntry::make('company.name')
                            ->label('Company'),
                        TextEntry::make('linkedin_url')
                            ->placeholder('-')
                            ->formatStateUsing(fn($state) => $state ? 'LinkedIn Profile' : '-')
                            ->url(fn($record) => $record->linkedin_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('twitter_url')
                            ->placeholder('-')
                            ->formatStateUsing(fn($state) => $state ? 'X' : '-')
                            ->url(fn($record) => $record->twitter_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('website_url')
                            ->placeholder('-')
                            ->formatStateUsing(fn($state) => $state ? 'Website' : '-')
                            ->url(fn($record) => $record->website_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('instagram_url')
                            ->placeholder('-')
                            ->formatStateUsing(fn($state) => $state ? 'Instagram' : '-')
                            ->url(fn($record) => $record->instagram_url, true)
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('tiktok_url')
                            ->placeholder('-')
                            ->url(fn($record) => $record->tiktok_url, true)
                            ->formatStateUsing(fn($state) => $state ? 'TikTok' : '-')
                            ->icon('heroicon-o-arrow-top-right-on-square'),
                        TextEntry::make('short_bio')
                            ->columnSpanFull()
                            ->html(),
                        TextEntry::make('nominated_by')
                            ->placeholder('-')
                            ->columnSpanFull()
                            ->icon('heroicon-o-envelope'),
                        IconEntry::make('is_approved')
                            ->boolean(),
                        TextEntry::make('approved_at')
                            ->dateTime()
                            ->placeholder('-'),
                        IconEntry::make('is_published')
                            ->boolean(),
                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
                        IconEntry::make('is_featured')
                            ->boolean(),
                        TextEntry::make('featured_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('last_featured_at')
                            ->dateTime()
                            ->placeholder('-'),
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
