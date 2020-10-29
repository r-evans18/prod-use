<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProducerItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'producer_items';
}
