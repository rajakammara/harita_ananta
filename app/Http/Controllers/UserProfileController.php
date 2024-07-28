<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            if (auth('sanctum')->check()) {
                $userid = auth('sanctum')->user()->id;
                $userProfile =
                    UserProfile::where('user_id', $userid)->first();
                return response()->json(['status' => 'success', 'dept_name' => isset($userProfile->dept_name) ?: '', 'designation' => isset($userProfile->designation) ?: '']);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'message' => $th->getMessage(),
            ], 502);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if (auth('sanctum')->check()) {
                $userid = auth('sanctum')->user()->id;
                $request->validate([
                    "dept_name" => "required",
                    "designation" => "required"

                ], [
                    "dept_name.required" => "Please enter department name",
                    "designation.required" => "Please enter designation"
                ]);
                $userProfile = new UserProfile();
                $userProfile->user_id = $userid;
                $userProfile->dept_name = $request->dept_name;
                $userProfile->designation = $request->designation;
                $userProfile->save();
                return response()->json(['status' => "success", 'message' => "User profile updated successfully!"], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'message' => $th->getMessage(),
            ], 502);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
