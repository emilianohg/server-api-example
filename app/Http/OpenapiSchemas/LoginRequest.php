<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class LoginRequest.
 *
 * @OA\Schema(
 *     title="LoginRequest model",
 *     description="LoginRequest model",
 * )
 */
class LoginRequest
{
    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email",
     *     example="correo1@example.com",
     * )
     *
     * @var string
     */
    protected string $email;

    /**
     * @OA\Property(
     *     title="Password",
     *     description="Password",
     *     example="password",
     * )
     *
     * @var string
     */
    protected string $password;
}