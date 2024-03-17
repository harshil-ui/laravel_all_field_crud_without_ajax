<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class ContractCategory extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'contract_categories';

    protected $fillable = ['name'];
}
