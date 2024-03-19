<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Scout\Searchable;

class ContractCategory extends Model
{
    use HasFactory, HasUuids, Searchable;

    protected $table = 'contract_categories';

    protected $fillable = ['name'];
}
