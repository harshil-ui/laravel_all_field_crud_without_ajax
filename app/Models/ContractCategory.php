<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCategory extends Model
{
    use HasFactory;

    protected $table = 'contract_categories';

    protected $fillable = ['name'];
}
