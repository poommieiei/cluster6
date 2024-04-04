<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    protected $table = 'methods';

    protected $fillable = [
        'method'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function params()
    {
        return $this->hasMany(Param::class);
    }

    public function headers()
    {
        return $this->hasMany(Header::class);
    }

    public function bodies()
    {
        return $this->hasMany(Bodie::class);
    }

    public function response_status()
    {
        return $this->hasMany(Response_status::class);
    }
}
