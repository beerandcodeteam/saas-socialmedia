<?php

namespace App\Filament\Pages\Tenancy\RegisterOrganization;

use App\Models\Organization;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterOrganization extends RegisterTenant
{
    public static function getLabel(): string
    {
        return "Registro da organização";
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nome da organização')
                    ->placeholder('Digite o nome da sua organização')
            ]);
    }

    public function handleRegistration(array $data): Organization
    {
        $organization = Organization::create($data);

        $organization->users()->attach(auth()->user());

        return $organization;
    }
}
