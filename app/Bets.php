<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    protected $fillable = [
        'user_id', 'total', 'roundup',
    ];

    // --------------------
    // Relations
    // --------------------
    /**
     * Gets the user related to the bet.
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }
}
