<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class Post.
 *
 * @OA\Schema(
 *     title="Post model",
 *     description="Post model",
 * )
 */
class Post
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     example="1"
     * )
     *
     * @var int
     */
    protected int $id;

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
     *     title="User ID",
     *     description="User ID",
     *     example="1"
     * )
     *
     * @var int
     */
    protected int $user_id;

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
     *     title="Category ID",
     *     description="Category ID",
     *     example="1"
     * )
     *
     * @var int
     */
    protected int $category_id;


    /**
     * @OA\Property(
     *     title="Category",
     *     description="Category",
     *     property="category",
     *     ref="#/components/schemas/Category"
     * )
     *
     * @var Category
     */
    protected Category $category;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2022-05-20T17:05:32.000000Z",
     * )
     *
     * @var string
     */
    protected string $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2022-05-20T17:05:32.000000Z",
     * )
     *
     * @var string
     */
    protected string $updated_at;
}