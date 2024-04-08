<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    use HasFactory;

    protected $table = 'params';

    protected $fillable = [
        'key',
        'type',
        'datatype',
        'require',
        'example_data',
        'description',
        'status',
        'method_id'
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
