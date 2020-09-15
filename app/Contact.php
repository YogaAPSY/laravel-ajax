<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name', 'address', 'city', 'phone_office', 'phone_mobile', 'pic', 'section', 'email', 'retail', 'active'];
}
