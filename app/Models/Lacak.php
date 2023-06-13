<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lacak extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lacak';
    protected $guarded = ['id_lacak'];
    public function Paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id_paket');
    }
}
