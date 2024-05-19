<?php

namespace App\Services;

use App\Repositories\UserRepository;
use SurazDott\Services\BaseService;

class UserService extends BaseService
{ 
    protected $repository;

    /**
     * Create new service instance.
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}
