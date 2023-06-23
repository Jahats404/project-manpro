<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tembakau extends Model
{
    use HasFactory;
    protected $table = 'tembakau';   
    protected $primaryKey = 'kode'; 
    protected $guarded = [];

    protected static function boot(){
        parent::boot();
        static::creating(function ($model){
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function penjualan(){
        return $this->hasMany(Penyewaan::class);
    }

    public function getIncrementing(){
        return false;
    }
    public function getKeyType()
    {
        return 'string';
    }

}
