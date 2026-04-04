<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Post Details')
                    //section 1 - post details
                    ->description('Fill in the details of the post')
                    // -> icon(HeroIcon::RocketLaunch)
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        Group::make([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('slug'),
                            Select::make('category_id')
                                ->relationship('category', 'name')
                                ->preload()
                                ->searchable(),
                            ColorPicker::make('color'),
                            MarkdownEditor::make('body'),
                        ])->columnSpan(2),

                        //Grouping fields into 2 columns
                        Group::make([
                            //section 2 - image
                            Section::make('Image Upload')
                                ->schema([
                                    FileUpload::make('image')
                                        ->disk('public')
                                        ->directory('posts'),
                                ]),

                            //section 3 - meta
                            Section::make('Meta Information')
                                ->schema([
                                    //RichEditor::make('content'),
                                    TagsInput::make('tags'),
                                    Checkbox::make('published'),
                                    DateTimePicker::make('published_at'),
                                ]),
                        ])->columnSpan(1),
                    ])->columns(3),
            ]);
    }
}
