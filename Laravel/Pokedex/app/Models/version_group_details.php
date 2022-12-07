<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class version_group_details extends Model
{
    use HasFactory;

    public function moves(){
        return $this->belongsTo(moves::class);
    }
}