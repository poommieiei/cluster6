<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'headers';

    protected $fillable = [
        'key',
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
