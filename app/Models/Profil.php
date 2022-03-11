<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id',
       'last_diplome',
       'enterprise',
       'curriculum_vitae',
       'biography',
       'birthday',
       'city',
       'adresse',
       'country',
       'facebook',
       'linkedin',
       'youtube',
       'github',
       'portfolio',
       'twitter'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
