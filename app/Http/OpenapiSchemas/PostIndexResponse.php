<?php


namespace App\Http\OpenapiSchemas;

/**
 * Class PostIndexResponse.
 *
 * @OA\Schema(
 *     title="PostIndexResponse model",
 *     description="PostIndexResponse model",
 * )
 */
class PostIndexResponse extends PaginationResponse
{
    /**
     * @OA\Property(
     *     description="List of posts",
     *     title="List of posts",
     *     type="array",
     *     @OA\Items(
     *          type="object",
     *          ref="#/components/schemas/Post",
     *     ),
     * )
     *
     * @var Post[]
     */
    protected array $data;
}