<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\User;

class UsersController extends Controller
{
    
    public function index(User $model)
    {
        $user = $model->get();
        $this->render($user);
    }

    public function create()
    {
        return "Criar";
    }
}
