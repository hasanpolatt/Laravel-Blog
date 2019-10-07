<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hakkimizda extends Model
{
    protected $table='hakkimizda';
    public $timestamps = false;
    protected $fillable=['hakkimizda_vizyon','hakkimizda_misyon','hakkimizda_yazi',
        'hakkimizda_icerik','hakkimizda_baslik'];
}
