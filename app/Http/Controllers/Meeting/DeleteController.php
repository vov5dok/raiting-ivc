<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use App\Models\Meeting;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Meeting $meeting)
    {
        $meeting->delete();
        return redirect()->route('meeting.index');
    }
}
