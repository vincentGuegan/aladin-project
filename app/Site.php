<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'city', 'address', 'postal_code',
    ];
}
