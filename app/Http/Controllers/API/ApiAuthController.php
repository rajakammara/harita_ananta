<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class ApiAuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|min:8',
                'mobile' => 'required|max:10|min:10',

            ]);
            // Return errors if validation error occur.
            if ($validator->fails()) {
                $errors = $validator->errors();

                return response()->json([
                    'status' => 'fail',
                    'error' => $errors
                ], 400);
            }
            // Check if validation pass then create user and auth token. Return the auth token

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'mandal' => $request->mandal,
                'role' => 'user'
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            $dept_id = $user->dept_id;
            $division_id = $user->division_id;
            $role = $user->role;
            if (isNull($dept_id) || isNull($division_id) || isNull($role)) {
                $dept_id = 0;
                $division_id = 0;
                $role = "user";
            }
            return response()->json([
                'status' => 'success',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'username' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'id' => $user->id,
                'role' => $role,
                'dept_id' => $dept_id,
                'division_id' => $division_id,
                'latitude' => $user->latitude,
                'longitude' => $user->longitude,
                'mandal' => $user->mandal,
                'is_deptuser' => $user->is_department_user,
                'dashboard_access' => $user->dashboard_access,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'error' => $th->getMessage(),
            ], 502);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'mobile' => 'required',
                'password' => 'required',
            ]);

            $user = User::where('mobile', $request->mobile)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                // throw ValidationException::withMessages([
                //     'mobile_no' => ['The provided credentials are incorrect.'],
                // ]);
                return response()->json([
                    'status' => "error",
                    'message' => 'Invalid Credentials'
                ], 401);
            }

            $token = $user->createToken("mobile")->plainTextToken;
            $dept_id = $user->dept_id;
            $division_id = $user->division_id;
            $role = $user->role;
            $dept_id = $user->dept_id == null ? 0 : $user->dept_id;
            $division_id = $user->division_id == null ? 0 : $user->division_id;

            $deptname = $user->userprofile?->dept_name;
            $designation = $user->userprofile?->designation;

            return response()->json([
                'status' => "ok",
                'access_token' => $token,
                'token_type' => 'Bearer',
                'role' => $role,
                'user_id' => $user->id,
                'user_name' => $user->name,
                'mobile_no' => $user->mobile,
                'email' => $user->email,
                'deptname' => $deptname,
                'designation' => $designation,
                'is_deptuser' => $user->is_department_user,
                'dashboard_access' => $user->dashboard_access,
                'division_id' => $division_id,
                'mandal' => $user->mandal,
                'latitude' => $user->latitude,
                'longitude' => $user->longitude,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'error' => $th->getMessage(),
            ], 502);
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user('sanctum')->currentAccessToken()->delete();
            return response()->json([
                'status' => 'success',
                'error' => "user logged out successfully",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'error' => $th->getMessage(),
            ], 502);
        }
    }
}
