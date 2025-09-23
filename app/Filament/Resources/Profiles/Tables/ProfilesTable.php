<?php

namespace App\Filament\Resources\Profiles\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\Enums\IconPosition;
use Filament\Tables\Columns\ImageColumn;

class ProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label("")
                    ->disk('profile')
                    ->defaultImageUrl(fn($record) => $record->image ? cdn_image('storage/profile/' . $record->image) : cdn_image('storage/profile/avatar-head-profile.webp')),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')
                    ->hidden(),
                TextColumn::make('job_title')
                    ->searchable(),
                TextColumn::make('views')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-o-eye')
                    ->iconPosition(IconPosition::After),
                TextColumn::make('company.name')
                    ->searchable(),
                // TextColumn::make('linkedin_url')
                //     ->searchable()
                // ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('twitter_url')
                //     ->searchable()
                // ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('website_url')
                //     ->searchable()
                // ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('instagram_url')
                //     ->searchable()
                // ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('tiktok_url')
                //     ->searchable()
                // ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('nominated_by')
                //     ->searchable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // IconColumn::make('is_approved')
                //     ->boolean()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('approved_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // IconColumn::make('is_published')
                //     ->boolean()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('published_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // IconColumn::make('is_featured')
                //     ->boolean()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('featured_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('last_featured_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
