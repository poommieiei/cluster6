<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    protected $table = 'workspace';

    protected $fillable = [
        'workspace_name'
    ];

    public function collection()
    {
        return $this->hasMany(Collection::class);
    }

}
