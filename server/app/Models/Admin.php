<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Override;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password'])]

class Admin extends Model
{
    //
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
