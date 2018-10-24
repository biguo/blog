<?php

namespace App\Model\Task;

use App\Model\Task\Task;
use App\Model\User\User;

class TaskRepository{
    /**
     * Get all of the tasks for a given user.
     *
     * @param User $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}