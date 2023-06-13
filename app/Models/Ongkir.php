<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ongkir extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ongkir';
    protected $guarded = ['id_ongkir'];
    public function Paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id_paket');
    }
}
