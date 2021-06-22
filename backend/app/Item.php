<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function path(){
        return route('admin.items.show', $this);
    }
}
