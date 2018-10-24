<?php

namespace App\Model\Task;

use App\Model\User\User;
use Illuminate\Database\Eloquent\Model;

class  Task extends Model
{
    //
    protected $fillable = ['name'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
