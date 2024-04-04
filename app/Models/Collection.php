<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collection';

    protected $fillable = [
        'collection_name'
    ];

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function method()
    {
        return $this->hasMany(Method::class);
    }

}