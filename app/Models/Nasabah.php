<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'gender',
        'nik',
        'born_place',
        'born_date',
        'phone',
        'job',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }


}
