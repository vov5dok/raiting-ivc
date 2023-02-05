<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;

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

        $user = User::firstOrCreate(['email' => $data['email']], $data);

        return redirect()->route('user.index');
    }
}
