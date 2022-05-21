<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class PostCreateRequest.
 *
 * @OA\Schema(
 *     title="PostCreateRequest model",
 *     description="PostCreateRequest model",
 *     required={
 *          "title",
 *          "description",
 *          "category_id",
 *     }
 * )
 */
class PostCreateRequest
{

    /**
     * @OA\Property(
     *     title="Title",
     *     description="Title",
     *     example="Title of post",
     * )
     *
     * @var string
     */
    protected string $title;

    /**
     * @OA\Property(
     *     title="Description",
     *     description="Description",
     *     example="Lorem ipsum dolor sit amet ...",
     * )
     *
     * @var string
     */
    protected string $description;

    /**
     * @OA\Property(
     *     title="Category ID",
     *     description="Category ID",
     *     example="1"
     * )
     *
     * @var int
     */
    protected int $category_id;
}