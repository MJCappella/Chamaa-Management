<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'Amount',
        'ExpenseName',
        'Description',
        'chamaa_id'
    ];

    public function chamaa()
    {
        return $this->belongsTo(Chamaa::class);
    }
}
