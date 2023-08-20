<?php

namespace App\GraphQL\Mutations;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final class LoginDoctor
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        //     $doctor = Doctor::where('email', $args['email'])->first();

    // if (! $doctor || ! Hash::check($args['password'], $doctor->password)) {
    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }
    // else{
    //     return $doctor->createToken($args['device_name'])->plainTextToken;
    // }
    $doctor = Doctor::where('email', $args['email'])->first();
    $passwordDoc = Doctor::where('password', $args['password'])->first();

    if (! $doctor || ! $passwordDoc) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
    else{
        return " Token: ".$doctor->createToken($args['device_name'])->plainTextToken;
    }
    }
}
