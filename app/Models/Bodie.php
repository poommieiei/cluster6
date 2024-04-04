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
        'status'
    ];

    public function method()
    {
        return $this->belongsTo(Method::class);
    }
}
