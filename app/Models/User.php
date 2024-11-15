<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\hasMany   ;
use App\Models\Loan;
use App\Models\Contribution;
use App\Models\Chamaa;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'FirstName',
        'LastName',
        'PhoneNumber',
        'email',
        'password',
        'chamaa_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function Contributions()
    {
        return $this->hasMany(Contribution::class);
    }

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Chamaa()
    {
        return $this->hasOne(Chamaa::class);
    }


}
