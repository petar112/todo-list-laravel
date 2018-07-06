<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoItem extends Model
{
    protected $table = 'to_do_items';

    protected $fillable = [
        'description', 'completed', 'priority', 'public'
    ];
    
    protected $hidden = [

    ];
}
