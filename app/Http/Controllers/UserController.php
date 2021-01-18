<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository) {
        $this->customerRepository = $customerRepository;
    }

    public function index() {
        $user = $this->customerRepository->allUser();
        return $user;
    }

    public function show($userId) {
        $user = $this->customerRepository->findById($userId);
        return $user;
    }
}
