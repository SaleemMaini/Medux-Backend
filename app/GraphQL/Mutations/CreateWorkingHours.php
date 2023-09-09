<?php

namespace App\GraphQL\Mutations;


use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use App\Models\WorkingHour;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final class CreateWorkingHours
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {

    }

    public function saveData($root, $args) {
        foreach ($args['input'] as $item) {
            $day = $item['day'];
            $active = $item['active'];
            $from = $item['from'];
            $to = $item['to'];
            }

            return true;
        }
}
