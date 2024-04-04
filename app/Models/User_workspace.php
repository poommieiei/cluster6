<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_workspace extends Model
{
    use HasFactory;

    protected $table = 'user_workspaces';

    public function users()
    {
        //                                    fkของU_W , pkของUser , pkของWorkspace
        return $this->belongsToMany(User::class , 'user_id' , 'id' , 'id');
    }

    public function workspaces()
    {
        return $this->belongsTo(Workspace::class , 'workspace_id' , 'id' , 'id');
    }
}
