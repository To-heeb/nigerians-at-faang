<?php

namespace App\Filament\Resources\Companies\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\Tags\Schemas\TagForm;
use App\Filament\Resources\Industries\Schemas\IndustryForm;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Company')
                    ->description('Provide essential details for the company.')
                    ->icon('heroicon-o-building-office-2')
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
                        RichEditor::make('about')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('founded_at')
                            ->required()
                            ->numeric()
                            ->prefixIcon(Heroicon::OutlinedCalendarDateRange),
                        TextInput::make('headquarters')
                            ->required()
                            ->prefixIcon(Heroicon::OutlinedBuildingOffice),
                        TextInput::make('website')
                            ->url()
                            ->required()
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt),
                        TextInput::make('information_website')
                            ->url()
                            ->required()
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt),
                        TextInput::make('career_page_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt),
                        TextInput::make('linkedin_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('twitter_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('youtube_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        TextInput::make('wikipedia_url')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedLink),
                        Select::make('tags')
                            ->label('Attach Tags')
                            ->relationship(titleAttribute: 'name')
                            ->multiple()
                            ->preload()
                            ->required()
                            ->searchable()
                            ->columnSpanFull()
                            ->createOptionForm(TagForm::form()),
                        Select::make('industries')
                            ->label('Attach Industries')
                            ->relationship(titleAttribute: 'name')
                            ->multiple()
                            ->preload()
                            ->required()
                            ->searchable()
                            ->columnSpanFull()
                            ->createOptionForm(IndustryForm::form()),
                        // Textarea::make('logo')
                        //     ->required()
                        //     ->columnSpanFull(),
                        // Textarea::make('mini_logo')
                        //     ->required()
                        //     ->columnSpanFull(),
                        FileUpload::make('logo')
                            ->image()
                            ->disk('company')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('mini_logo')
                            ->image()
                            ->disk('company')
                            ->required()
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
