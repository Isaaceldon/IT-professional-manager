<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competence extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'libelle'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
