<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class Category.
 *
 * @OA\Schema(
 *     title="Category model",
 *     description="Category model",
 * )
 */
class Category
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
    protected int $id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name",
     *     example="Technology",
     * )
     *
     * @var string
     */
    protected string $name;

    /**
     * @OA\Property(
     *     title="Image URL",
     *     description="Image URL",
     *     example="http://localhost:8000/images/covers/technology.jpg"
     * )
     *
     * @var string
     */
    protected string $image_url;

    /**
     * @OA\Property(
     *     title="Icon URL",
     *     description="Icon URL",
     *     example="http://localhost:8000/images/icons/technology.png"
     * )
     *
     * @var string
     */
    protected string $icon_url;
}