<?php

namespace App\Repositories;

use App\Models\User;
use SurazDott\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    protected $model;

    /**
     * Create new repository instance.
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
