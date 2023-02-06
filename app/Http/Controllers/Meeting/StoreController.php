<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Meeting\StoreRequest;
use App\Models\Meeting;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

//        dd($data);

        $meeting = Meeting::create($data);

        return redirect()->route('meeting.index');
    }
}
