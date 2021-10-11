<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'title', 'slug', 'excerpt', 'body', 'batch_id', 'department_id', 'start_at', 'end_at', 'price'
    ];

    protected $hiden = [

    ];


    public function batch()
    {
        return $this->hasMany(Batch::class);
    }
}
