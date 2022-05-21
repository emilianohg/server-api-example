<?php

namespace App\Http\OpenapiSchemas;


/**
 * Class LinkPagination.
 *
 * @OA\Schema(
 *     title="LinkPagination model",
 *     description="LinkPagination model",
 * )
 */
class LinkPagination
{
    /**
     * @OA\Property(
     *      description="Url",
     *      title="Url",
     *      type="string",
     *      example="null"
     * )
     *
     * @var string
     */
    protected string $url;

     /**
     * @OA\Property(
     *      description="Label",
     *      title="Label",
     *      type="string",
     *      example="&laquo; Previous"
     * )
     *
     * @var string
     */
     protected string $label;

     /**
     * @OA\Property(
     *      description="Active",
     *      title="Active",
     *      type="boolean",
     *      example="false"
     * )
     *
     * @var string
     */
    protected string $active;
}