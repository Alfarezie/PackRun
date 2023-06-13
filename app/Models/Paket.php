<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class paket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_paket';
    protected $guarded = ['id_paket'];
    public function Ongkir(): HasOne
    {
        return $this->hasOne(Ongkir::class);
    }
    public function Lacak(): HasOne
    {
        return $this->hasOne(Lacak::class);
    }
    public function Riwayat(): HasOne
    {
        return $this->hasOne(Riwayat::class);
    }
}
