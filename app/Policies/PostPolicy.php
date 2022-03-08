<?php

namespace App\Policies;

use App\Models\Kids;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Kids $kids)
    { 
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Kids $kids)
    {return $user->id==$kid->user_id;
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Kids $kids)
    {
        if ($user->id==$post->user_id) {
            return true;
        }
     
        foreach ($user->roles as $role) {
            if ($role->name=='admin') {
                return true;
            }
        }
           return false;
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Kids $kids)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Kids $kids)
    {
        //
    }
}
