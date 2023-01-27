<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function getRouteKeyName()
    {
    return 'order_id';
    }
}
