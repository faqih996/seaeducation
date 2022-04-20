<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'program_id', 'users_id', 'batch_id',
        'transaction_total', 'Transaction_status'
    ];

    protected $hidden = [


    ];

    public function details(){
        return  $this->BelongsTo
    }
}
