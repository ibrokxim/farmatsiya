<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['recipient, subject, body'];
    
    protected $appends = ['selfMessage'];

    public function getSelfMessageAttribute()
    {
        return $this->user_id === auth()->user()->id;
    }
    // public function user()
    // {
    //     return $this->belongsTo(AdminUser::class);
    // }
 }
