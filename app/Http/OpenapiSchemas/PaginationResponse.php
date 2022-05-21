<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class PaginationResponse.
 *
 * @OA\Schema(
 *     title="PaginationResponse model",
 *     description="PaginationResponse model",
 * )
 */
class PaginationResponse
{
    /**
     * @OA\Property(
     *     format="int64",
     *     title="current_page",
     *     description="current_page",
     * )
     *
     * @var int
     */
    protected $current_page;


    protected array $data;

    /**
     * @OA\Property(
     *     title="First page url.",
     *     description="First page url.",
     * )
     *
     * @var string
     */
    protected $first_page_url;

    /**
     * @OA\Property(
     *     format="int64",
     *     title="from",
     *     description="from",
     * )
     *
     * @var int
     */
    protected $from;

    /**
     * @OA\Property(
     *     format="int64",
     *     title="last_page",
     *     description="last_page",
     * )
     *
     * @var int
     */
    protected $last_page;

    /**
     * @OA\Property(
     *     title="Last page url.",
     *     description="Last page url.",
     * )
     *
     * @var string
     */
    protected $last_page_url;

    /**
     * @OA\Property(
     *     description="links",
     *     title="links",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/LinkPagination"),
     * )
     *
     * @var array
     */
    protected $links;

    /**
     * @OA\Property(
     *     title="Next page url.",
     *     description="Next page url.",
     * )
     *
     * @var string
     */
    protected $next_page_url;

    /**
     * @OA\Property(
     *     title="Path.",
     *     description="Path.",
     * )
     *
     * @var string
     */
    protected $path;

    /**
     * @OA\Property(
     *     format="int64",
     *     title="Per page.",
     *     description="Number of items per page.",
     * )
     *
     * @var int
     */
    protected $per_page;

    /**
     * @OA\Property(
     *     title="Previus page url.",
     *     description="Previus page url.",
     * )
     *
     * @var string
     */
    protected $prev_page_url;

    /**
     * @OA\Property(
     *     format="int64",
     *     title="to",
     *     description="to",
     * )
     *
     * @var int
     */
    protected $to;

    /**
     * @OA\Property(
     *     format="int64",
     *     title="total",
     *     description="total",
     * )
     *
     * @var int
     */
    protected $total;

}