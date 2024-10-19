<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Workspace;

class WorkspacePolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Workspace $workspace)
    {
        return $user->id === $workspace->user_id;
    }
    public function create(User $user, Workspace $workspace)
    {
        return $user->id === $workspace->user_id;
    }
    public function view(User $user, Workspace $workspace)
    {
        return $user->id === $workspace->user_id;
    }
}
