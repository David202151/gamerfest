<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{
    protected $fillable = [
        'tipo',
        'numero_jugadores',
        'competencia',
        'descripcion',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/categoria/'.$this->getKey());
    }
}
