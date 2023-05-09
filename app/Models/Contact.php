<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id_user',
        'name',
        'phone',
        'email',
        'street',
        'state',
        'cpf',
        'phone-number',
        'cep',
        'number',
        'city',
        'note'
    ];
}
