<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journey extends Model
{
    use SoftDeletes;

    protected $fillable = ['country','region','city','location','date_start','duration','placement','service','description','available','price'];
}
