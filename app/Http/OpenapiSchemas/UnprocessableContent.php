<?php

namespace App\Http\OpenapiSchemas;

/**
 * Class UnprocessableContent.
 *
 * @OA\Schema(
 *     title="UnprocessableContent model",
 *     description="UnprocessableContent model",
 * )
 */
class UnprocessableContent
{
    /**
     * @OA\Property(
     *     title="Message",
     *     description="Message",
     *     example="The given data was invalid.",
     * )
     *
     * @var string
     */
    protected string $message;

    /**
     * @OA\Property(
     *     title="Errors",
     *     description="Errors",
     *     example="{}",
     * )
     *
     * @var mixed
     */
    protected mixed $errors;
}