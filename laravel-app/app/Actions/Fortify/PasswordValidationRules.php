<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
{
    return [
        'required',
        'string',
        Password::min(8)
            ->mixedCase() // Requires at least one uppercase and one lowercase letter
            ->letters()   // Requires at least one letter
            ->numbers()   // Requires at least one number
            ->symbols()   // Requires at least one symbol
            ->uncompromised(), // Checks if the password has been exposed in data breaches
        'confirmed'
    ];
}
}
