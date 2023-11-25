<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposition extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];

    public function expedition() {
        return $this->belongsTo(expeditions::class, 'id_expedition');
    }

    public function societe() {
        return $this->belongsTo(Societe::class, 'id_societe');
    }
}
