<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable =
    [
        'title',
        'released',
        'director',
        'critic_score',
        'user_score'
    ];
    protected $hidden = ['pivot'];

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function platforms()
    {
        return $this->belongsToMany('App\Platform');
    }

}
