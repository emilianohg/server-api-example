<?php


namespace App\Http\OpenapiSchemas;

/**
 * Class UserIndexResponse.
 *
 * @OA\Schema(
 *     title="UserIndexResponse model",
 *     description="UserIndexResponse model",
 * )
 */
class UserIndexResponse extends PaginationResponse
{
    /**
     * @OA\Property(
     *     description="List of users",
     *     title="List of users",
     *     type="array",
     *     @OA\Items(
     *          type="object",
     *          ref="#/components/schemas/User",
     *     ),
     * )
     *
     * @var Post[]
     */
    protected array $data;
}