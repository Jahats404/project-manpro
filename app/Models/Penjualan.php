<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kode',
        'rasa'
    ];

    public function tembakau(){
        return $this->belongsTo(Tembakau::class, 'kode', 'kode');
    }
}
