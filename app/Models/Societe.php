<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];

    public function expeditions(){
        return $this->hasMany(expeditions::class, 'id_societe');
    }

}

