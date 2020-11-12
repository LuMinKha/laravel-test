<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use Kyslik\ColumnSortable\Sortable;

class Item extends Model
{
    use HasFactory;
    use Filterable;
    use Sortable;

    public $sortable = ['name','color','weight'];
    
 
}
