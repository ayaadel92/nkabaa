<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $fillable = [
    'status', 'name', 'health_id', 'eng_id', 'birth_date', 'gender', 'relation_type', 'national_id', 'path', 'limit_id'
    ];
}
