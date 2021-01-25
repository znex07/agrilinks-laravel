<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;
    protected $table = 'equipment_registration';
    protected $fillable = [
        'name',
        'address',
        'reg_type',
        'gender',
        'bday',
        'owrep',
        'nameorg',
        'list_equipment'
    ];

}
