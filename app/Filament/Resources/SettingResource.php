<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class SettingResource extends Resource
{

    protected static ?string $model = Setting::class;


    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('site_name')
                ->required()
                ->label('Site Name'),

            FileUpload::make('header_image')
                ->label('header_image'),


            TextInput::make('phone_number')
                ->required()
                ->label('Phone Number'),

            Textarea::make('cta_title')
                ->required()
                ->label('cta_title')
                ->label('CTA Title'),


                Textarea::make('cta_text')

                ->label('cta_text')
                ->label('CTA Text'),


                TextInput::make('social_fb_link')
                ->required()

                ->label('Facebook Handle Link'),

                TextInput::make('social_x_link')
                ->required()

                ->label('X Handle Link'),

                TextInput::make('social_ig_link')
                ->required()

                ->label('Instagram Handle Link'),

                TextInput::make('social_tk_link')
                ->required()

                ->label('Tiktok Handle Link'),

                Textarea::make('terms_of_service_text')
                ->required()
                ->label('terms_of_service_text')
                ->label('Terms of Service Text'),

                Textarea::make('support_text')
                ->required()
                ->label('support_text')
                ->label('Support Text'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
