<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response_status extends Model
{
    use HasFactory;

    protected $table = 'response_status';

    protected $fillable = [
        'response_code',
        'method_id'
    ];

    public function method()
    {
        return $this->belongsTo(Method::class);
    }

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
