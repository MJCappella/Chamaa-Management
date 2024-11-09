<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contribution extends Model
{
    use HasFactory;
    protected $fillable=[
        'Type',
        'Amount',
        'user_id'
    ];

    public function contributions()
    {
        return $this->belongsTo(Contribution::class);
    }

   
    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
