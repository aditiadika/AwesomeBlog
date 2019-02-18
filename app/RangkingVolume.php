<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RangkingVolume extends Model
{
    public $fillable = ['saham',
                        'datetime',
                        'ranking_volume',
                        'close',
                        'change',
                        'buy_volume',
                        'sell_volume',
                        'today_volume',
                        'average_volume'
    ];
}
