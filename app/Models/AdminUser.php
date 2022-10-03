<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory;

   

    protected $fillable = [
        "name",
        "role",
        "email",
        "password"
    ];
    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }

    // // A user can also receive a message
    // public function received()
    // {
    //     return $this->hasMany(Message::class, 'sent_to_id');
    // }

    // public function sendMessageTo($recipient, $message, $subject)
    // {
    //     return $this->sent()->create([
    //         'body'       => $message,
    //         'subject'    => $subject,
    //         'sent_to_id' => $recipient,
    //     ]);   
    

    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
