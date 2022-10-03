<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function sender()
    {
        return $this->belongsTo(AdminUser::class);
    }

    public function receiver()
    {
        return $this->belongsTo(AdminUser::class);
    }
    
}
