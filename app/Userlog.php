<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Userlog extends Model
{
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
}
