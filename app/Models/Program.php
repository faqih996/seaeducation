<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Program extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable= [
    'tittle', 'slug', 'body', 'excerpt', 'body', 'location_id',
    'status', 'batch_id', 'department_id', 'price', 'start_at', 'end_at'
    ];

    protected $hidden = [

    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
