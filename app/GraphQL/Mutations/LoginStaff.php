<?php

namespace App\GraphQL\Mutations;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


final class LoginStaff
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // $staff = Staff::where('email', $args['email'])->first();

    // if (! $staff || ! Hash::check($args['password'], $staff->password)) {
    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }
    // else{
    //     return $staff->createToken($args['device_name'])->plainTextToken;
    // }
    $staff = Staff::where('email', $args['email'])->first();
    $passwordSta = Staff::where('password', $args['password'])->first();


    if (! $staff || ! $passwordSta) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
    else{
        return $staff->createToken($args['device_name'])->plainTextToken;
    }
    }
}
