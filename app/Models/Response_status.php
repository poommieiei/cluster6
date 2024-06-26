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

    public function request_collection()
    {
        return $this->belongsTo(Request_Collection::class);
    }

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
