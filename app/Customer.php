<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function uploadImage($image, $email) {
        if($image == null) {
            return;
        }
        $filename = $image->getClientOriginalName();
        $image->storeAs('uploads/customers/' . $email, $filename);
        $this->image = $filename;
        $this->save();
    }
    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/customers/' . $this->email . '/' . $this->image);
        }
    }
}
