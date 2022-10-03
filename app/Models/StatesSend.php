<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatesSend extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'user_id', 'status', 'stat_lang', 'short_name', 'stat_type', 'category',
        'institute_uz', 'institute_ru', 'institute_en', 'annotation', 'key_words',  'files',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    
}
