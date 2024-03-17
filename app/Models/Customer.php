<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'number',
        'date',
        'contract_category_id',
        'country',
        'image',
        'comment',
        'sports',
        'gender'
    ];
}
