<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_id',
        'no_rekening',
        'jenis_rekening',
        'account_type',
        'saldo',
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
