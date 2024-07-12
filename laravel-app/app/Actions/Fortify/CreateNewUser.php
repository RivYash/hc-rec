<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
     public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'string', 'regex:/^\d{10,10}$/' ,'min:10', 'max:10'],
            'temp_address' => ['required', 'string', 'max:255'],
            'per_address' => ['required', 'string', 'max:255'],
            'pin_code' => ['required', 'string', 'regex:/^\d{6,7}$/'],
            'gender' => ['required', 'in:M,F,O'],
            'date_birth'=> ['required','date'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted'] : [],
        ])->validate();

        //  dd($input);
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'],
            'temp_address' => $input['temp_address'],
            'per_address' => $input['per_address'],
            'pin_code' => $input['pin_code'],
            'date_birth'=>$input['date_birth'],
            'gender' => $input['gender'],
            
        ]);
    }
}
