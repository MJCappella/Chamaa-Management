<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamaa extends Model
{
    use HasFactory;

    protected $fillable = [
        'ChamaaName',
        'email',
        'PhoneNumber',
        'Password',
      
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function chamaa()
    {
        return $this->belongsTo(Chamaa::class);
    }

}
