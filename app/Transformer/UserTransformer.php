<?php

namespace App\Transformer;

use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id'            => (int) $user->id,
            'name'          => (string) $user->name,
            'email'         => (string) $user->email,
            'address'       => (string) $user->address,
        ];
    }
}