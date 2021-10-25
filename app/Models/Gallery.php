<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable= [
    'program_id', 'images'
    ];

    protected $hidden = [

    ];

    public function Program()
    {
        return $this->belongsTo(program::class, 'program_id', 'id');
    }
}
