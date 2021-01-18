<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function allUser();

    public function findById($userId);
}
