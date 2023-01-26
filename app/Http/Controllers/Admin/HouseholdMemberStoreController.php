<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseholdMemberStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $member = $request->user()->householdMembers()->create(
            $request->only('type', 'name', 'email', 'phone', 'identification', 'gender')
        );

        return redirect()->back();
    }
}
