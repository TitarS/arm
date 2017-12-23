<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'message',
        'mission',
        'date'
    ];
    public static function add($fields) {
        $customer = new static;
        $customer->fill($fields);
        $customer->save();

        return $customer;
    }
}
