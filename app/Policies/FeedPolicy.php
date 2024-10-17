<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Feed;

class FeedPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Feed $feed){
        return $feed->user_id==$user->id;
    }
}
