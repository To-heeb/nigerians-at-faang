<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Profile')
                    ->description('Provide essential details for the profile.')
                    ->icon('heroicon-o-user-group')
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
                        Textarea::make('image')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('job_title')
                            ->required(),
                        Select::make('company_id')
                            ->relationship('company', 'name')
                            ->searchable()
                            ->required()
                            ->native(false),
                        TextInput::make('linkedin_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('twitter_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('website_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt),
                        TextInput::make('instagram_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('tiktok_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        RichEditor::make('short_bio')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('nominated_by')
                            ->email()
                            ->columnSpanFull()
                            ->prefixIcon(Heroicon::OutlinedEnvelope),
                        Toggle::make('is_approved')
                            ->required(),
                        DateTimePicker::make('approved_at'),
                        Toggle::make('is_published')
                            ->required(),
                        DateTimePicker::make('published_at'),
                        Toggle::make('is_featured')
                            ->required(),
                        DateTimePicker::make('featured_at'),
                        DateTimePicker::make('last_featured_at'),
                    ])
            ]);
    }
}
