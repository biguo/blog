<?php

namespace App\Policies;

use App\Model\Task\Task;
use App\Model\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {

        return $user->id === $task->user_id;
    }
}
