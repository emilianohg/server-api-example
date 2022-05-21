<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UsersController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/users",
     *      operationId="getUsers",
     *      tags={"Users"},
     *      summary="Get list of users",
     *      description="Returns list of users",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/UserIndexResponse")
     *       )
     *     )
     */
    public function index(): JsonResponse
    {
        $users = User::query()->paginate();
        return response()->json($users);
    }
}