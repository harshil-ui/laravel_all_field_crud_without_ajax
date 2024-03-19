<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, HasUuids, Searchable;
    use SoftDeletes;


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'number',
        'date',
        'contract_category_id',
        'country',
        'image',
        'comment',
        'sports',
        'gender'
    ];

    protected $hidden = ['password'];
}
