<?php

namespace App\Filament\Resources\Lectures\Schemas;

use App\Enums\Subject;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LectureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('subject')
                    ->options(Subject::options())
                    ->required(),
                TextInput::make('description')
                    ->columnSpanFull(),
                Repeater::make('urls')
                    ->schema([
                        TextInput::make('url')
                            ->url()
                            ->required(),
                    ])
                    ->columnSpanFull()
            ]);
    }
}
