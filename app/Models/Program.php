<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Program extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable= [
    'title', 'slug', 'about',  'excerpt', 'class',
    'status', 'batch_id', 'price', 'start_at', 'end_at', 'end_reg'
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

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('dd-month-Y');
    }
}
