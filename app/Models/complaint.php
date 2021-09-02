<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(user::class);
    }

    public function complaintReply()
    {
        return $this->hasMany(complaintReply::class);
    }


}
