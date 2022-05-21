<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class LoginResponse.
 *
 * @OA\Schema(
 *     title="LoginResponse model",
 *     description="LoginResponse model",
 * )
 */
class LoginResponse
{
    /**
     * @OA\Property(
     *     title="Token",
     *     description="Token",
     *     example="1|USMA41xVLp4Zwy7XpULYDuZywbZBE7EoC5BhXtMH",
     * )
     *
     * @var string
     */
    protected string $token;

    /**
     * @OA\Property(
     *     title="User",
     *     description="User",
     *     property="user",
     *     ref="#/components/schemas/User"
     * )
     *
     * @var User
     */
    protected User $user;

    /**
     * @OA\Property(
     *     title="Message",
     *     description="Message",
     *     example="Success",
     * )
     *
     * @var string
     */
    protected string $message;
}