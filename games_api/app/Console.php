<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $fillable =
    [
        'name',

    ];
    protected $hidden = ['pivot'];

    public function games()
    {
        return $this->belongsToMany('App\Game', 'game_console');
    }
}
