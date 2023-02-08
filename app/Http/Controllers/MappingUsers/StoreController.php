<?php

namespace App\Http\Controllers\MappingUsers;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use App\Models\User;
use App\Models\UserMeeting;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
//        dd($request->points);

        foreach ($request->points as $userId => $dataUser) {
            $user = User::find($userId);
            foreach ($dataUser as $meetingId => $point) {

                UserMeeting::updateOrCreate(
                    [
                        'user_id' => $userId,
                        'meeting_id' => $meetingId,
                    ],
                    [
                        'user_id' => $userId,
                        'meeting_id' => $meetingId,
                        'point' => $point
                    ]
                );

//                $userMeeting = new UserMeeting();
//                $userMeeting->user_id = $userId;
//                $userMeeting->meeting_id = $meetingId;
//                $userMeeting->point = $point;
//
//                $userMeeting->save();


//                $user->meetings()->updateExistingPivot($meetingId, [
//                    'point' => $point,
//                ]);

//                $user->meetings()->sync([2 => $meetingId, 1 => $userId, 3 => $point], false);

            }
        }

//        foreach ($request->points as $userId => $dataUser) {
//            $user = User::find($userId);
//            $user->meetings->updateExistingPivot($userId, [
//                'point' => false,
//            ]);
//        }



        return redirect()->route('mapping.users.index');

    }
}
