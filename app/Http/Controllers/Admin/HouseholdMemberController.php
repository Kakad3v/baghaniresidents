<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HouseholdMemberController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return inertia()->render('Members/AddHouseholdMember', [
            'user' =>  $user
        ]);
    }
}
