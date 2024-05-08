<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name'
    ];
    protected $hidden = ['pivot'];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_platform');
    }
}
