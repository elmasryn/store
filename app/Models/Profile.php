<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use  HasFactory;

/****************************** Relations ***********************************************/
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
/******************************  ***********************************************/

protected function img(): Attribute
{
    return Attribute::make(
        get: fn ($value) => $value ?? 'default.png',
    );
}

}
