<?php

namespace App\Http\Controllers\MappingUsers;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use App\Models\User;
use App\Models\UserMeeting;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $users = User::all();
        $meetings = Meeting::all();

        return view('mapping_users.index', compact(['users', 'meetings']));
    }
}
