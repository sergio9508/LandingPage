<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    public $table = 'contacts';
    public $fillable = ['name', 'insurance_type', 'email'];
}
