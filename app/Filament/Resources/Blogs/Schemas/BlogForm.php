<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog')
                    ->description('Provide essential details for the blog.')
                    ->icon('heroicon-o-newspaper')
                    ->collapsible()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->readOnly()
                            ->dehydrated(false),
                        RichEditor::make('body')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image()
                            ->disk('blog')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('author')
                            ->default('Oyekola Toheeb'),
                        Select::make('profile_id')
                            ->relationship('profile', 'name')
                            ->native(false),
                        Toggle::make('is_published')
                            ->required(),
                        DateTimePicker::make('published_at')
                            ->native(false)
                            ->prefixIcon(Heroicon::OutlinedCalendar),
                        Toggle::make('is_featured')
                            ->required(),
                        DateTimePicker::make('featured_at')
                            ->native(false)
                            ->prefixIcon(Heroicon::OutlinedCalendar),
                        DateTimePicker::make('last_featured_at')
                            ->native(false)
                            ->prefixIcon(Heroicon::OutlinedCalendar),
                    ])
            ]);
    }
}
