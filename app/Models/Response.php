<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = [
        'key',
        'datatype',
        'example_data',
        'description',
    ];

    public function Response_status()
    {
        return $this->belongsTo(Response_status::class);
    }
}
