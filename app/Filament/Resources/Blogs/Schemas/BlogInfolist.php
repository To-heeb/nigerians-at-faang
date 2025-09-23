<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Support\Enums\IconPosition;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class BlogInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Blog")
                    ->collapsible()
                    ->persistCollapsed()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('slug')
                            ->hidden(),
                        ImageEntry::make('image')
                            ->disk('profile')
                            ->defaultImageUrl(fn($record) => $record->image ? cdn_image('storage/blog/' . $record->image) : cdn_image('assets/img/blog/blog-1.jpg')),
                        TextEntry::make('body')
                            ->columnSpanFull()
                            ->html(),
                        TextEntry::make('author')
                            ->placeholder('-')
                            ->columnSpanFull()
                            ->icon('heroicon-o-user')
                            ->iconPosition(IconPosition::Before),
                        TextEntry::make('views')
                            ->numeric()
                            ->icon('heroicon-o-eye')
                            ->iconPosition(IconPosition::After),
                        TextEntry::make('profile.name')
                            ->label('Profile')
                            ->placeholder('-')
                            ->icon('heroicon-o-user')
                            ->iconPosition(IconPosition::Before),
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
