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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make(
            $input,
            $messages =
                [
                    'name' => ['required', 'string', 'max:255'], 'Please enter your name',
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 'Your email has been registered! Try another.',
                    'password' => $this->passwordRules(),
                    'confirmed' => ['required', 'string', 'same:password'], 'Confirm password must be same with password',
                    'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '', 'Please tick agree term and condition',
            'user_type' => ['required'],

                ]
        )->validate($messages);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_type' => $input['user_type'],
        ]);
    }
}
