<?php

namespace App\GraphQL\Mutations;

use App\Models\Patient;
use Illuminate\Validation\ValidationException;

final class LoginPatient
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $patient = Patient::where('email', $args['email'])->first();
        $passwordPat = Patient::where('password', $args['password'])->first();

        if (! $patient || ! $passwordPat) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        else{
            return " Token: ".$patient->createToken($args['device_name'])->plainTextToken;
        }
    }
}
