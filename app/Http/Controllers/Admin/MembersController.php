<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Members/Index', [
            'members' => User::all()
        ]);
    }
}
