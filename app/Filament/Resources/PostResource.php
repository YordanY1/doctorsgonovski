<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Блог';
    protected static ?string $navigationGroup = 'Съдържание';


    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->label('Заглавие')->required()->maxLength(255),
            TextInput::make('slug')
                ->label('Slug')
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->disabled()
                ->dehydrated()
                ->afterStateHydrated(function (\Filament\Forms\Set $set, $state, $record) {
                    if (! $state && $record) {
                        $set('slug', \Str::slug($record->title));
                    }
                })
                ->lazy()
                ->afterStateUpdated(fn(\Filament\Forms\Set $set, $state) => $set('slug', \Str::slug($state))),

            Select::make('excerpt')
                ->label('Категория')
                ->required()
                ->options([
                    'Интервю' => 'Интервю',
                    'Съвети' => 'Съвети',
                    'Новини' => 'Новини',
                    'Обща информация' => 'Обща информация',
                ]),
            RichEditor::make('content')->label('Съдържание'),
            TextInput::make('external_url')
                ->label('Външен линк (по избор)')
                ->url()
                ->nullable()
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Корица')
                ->image()
                ->directory('blogs')
                ->imagePreviewHeight('250')
                ->downloadable()
                ->visibility('public')
                ->disk('public')     
                ->columnSpanFull(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Заглавие')->searchable(),
            Tables\Columns\ImageColumn::make('image')->label('Корица')->circular(),
            Tables\Columns\TextColumn::make('created_at')->label('Дата')->dateTime(),
        ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
