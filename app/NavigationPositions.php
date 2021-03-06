<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavigationPositions extends Model
{
    protected $casts = [
        'sort' => 'integer',
    ];
    public function nav()
    {
        return $this->hasMany('App\Navigation', 'position_id');
    }
}
