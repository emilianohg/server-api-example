<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class User.
 *
 * @OA\Schema(
 *     title="User model",
 *     description="User model",
 * )
 */
class User
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     example="1",
     * )
     *
     * @var int
     */
    protected $id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name",
     *     example="Desmond Adams",
     * )
     *
     * @var string
     */
    protected $name;

    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email",
     *     example="correo1@example.com",
     * )
     *
     * @var string
     */
    protected $email;

    /**
     * @OA\Property(
     *     title="Email verified at",
     *     description="Email verified at",
     *     example="2022-05-20T17:05:32.000000Z",
     * )
     *
     * @var string
     */
    protected $email_verified_at;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2022-05-20T17:05:32.000000Z",
     * )
     *
     * @var string
     */
    protected $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2022-05-20T17:05:32.000000Z",
     * )
     *
     * @var string
     */
    protected $updated_at;
}