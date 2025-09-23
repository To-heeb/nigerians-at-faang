<?php

namespace App\Filament\Resources\Companies\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\ImageColumn;

class CompaniesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label("")
                    // ->circular()
                    ->disk('company')
                    ->defaultImageUrl(fn($record) => $record->mini_logo ? cdn_image('storage/company/' . $record->mini_logo) : "https://img.icons8.com/dotty/80/company.png"),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->hidden(),
                TextColumn::make('founded_at')
                    ->sortable(),
                TextColumn::make('headquarters')
                    ->searchable()
                    ->icon('heroicon-o-map-pin'),
                TextColumn::make('website')
                    ->searchable()
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(fn($record) => $record->website, true),
                // TextColumn::make('linkx')
                //     ->label('Linksx')
                //     ->html()
                //     ->getStateUsing(fn($record) => $record) // pass full record
                //     ->formatStateUsing(function ($record) {
                //         $links = [
                //             'Website'   => $record->information_website,
                //             'Careers'   => $record->career_page_url,
                //             'LinkedIn'  => $record->linkedin_url,
                //             'Twitter'   => $record->twitter_url,
                //             'YouTube'   => $record->youtube_url,
                //             'Wikipedia' => $record->wikipedia_url,
                //         ];

                //         $items = collect($links)
                //             ->filter()
                //             ->map(fn($url, $label) => "<li><a href='{$url}' target='_blank' class='text-primary-600 hover:underline'>{$label}</a></li>")
                //             ->implode('');

                //         if ($items === '') {
                //             return '<span class="text-gray-400">No Links</span>';
                //         }

                //         return "
                //             <details class='group'>
                //                 <summary class='cursor-pointer text-primary-700 hover:underline'>View Links</summary>
                //                 <ul class='ml-4 list-disc'>
                //                     {$items}
                //                 </ul>
                //             </details>
                //         ";
                //     }),
                ViewColumn::make('links')
                    ->label('Links')
                    ->view('companies.tables.columns.company-links'),
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
