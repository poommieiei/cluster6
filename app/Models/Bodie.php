<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodie extends Model
{
    use HasFactory;

    protected $table = 'bodies';

    protected $fillable = [
        'key',
        'require',
        'example_data',
        'description',
        'status',
        'method_id'
    ];

    public function request_collection()
    {
        return $this->belongsTo(Request_Collection::class);
    }
}
