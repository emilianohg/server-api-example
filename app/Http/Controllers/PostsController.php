<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostDeleteRequest;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostsController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/posts",
     *      operationId="getPosts",
     *      tags={"Posts"},
     *      summary="Get list of posts",
     *      description="Returns list of posts",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PostIndexResponse")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *  )
     */
    public function index(): JsonResponse
    {
        $posts = Post::query()->with(['user', 'category'])->paginate();
        return response()->json($posts);
    }

    /**
     * @OA\Get(
     *      path="/api/posts/{id}",
     *      operationId="getPost",
     *      tags={"Posts"},
     *      summary="Get post",
     *      description="Return post",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Post ID",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Post")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *  )
     */
    public function show(int $id): JsonResponse
    {
        $posts = Post::query()->with([
            'user',
            'category',
        ])->findOrFail($id);

        return response()->json($posts);
    }

    /**
     * @OA\Post(
     *     path="/api/posts",
     *     tags={"Posts"},
     *     summary="Posts",
     *     description="Posts",
     *     operationId="createPost",
     *     deprecated=false,
     *     @OA\RequestBody(
     *         description="post",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/PostCreateRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful Operation",
     *         @OA\JsonContent(ref="#/components/schemas/Post"),
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated",
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Unprocessable Content",
     *         @OA\JsonContent(ref="#/components/schemas/UnprocessableContent"),
     *     ),
     *     security={{"apiAuth":{}}}
     * )
     *
     */
    public function store(PostStoreRequest $request): JsonResponse
    {
        $user = $request->user();
        $data = $request->all();
        $data['user_id'] = $user->id;

        $postCreated = Post::query()->create($data);
        $post = Post::query()->with([
            'user',
            'category',
        ])->findOrFail($postCreated->id);

        return response()->json($post);
    }

    /**
     * @OA\Put(
     *     path="/api/posts/{id}",
     *     tags={"Posts"},
     *     summary="Posts",
     *     description="Posts",
     *     operationId="updatePost",
     *     deprecated=false,
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Post ID",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="post",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/PostUpdateRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful Operation",
     *         @OA\JsonContent(ref="#/components/schemas/Post"),
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found",
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Unprocessable Content",
     *         @OA\JsonContent(ref="#/components/schemas/UnprocessableContent"),
     *     ),
     *     security={{"apiAuth":{}}}
     * )
     *
     */
    public function update(int $id, PostUpdateRequest $request): JsonResponse
    {
        $data = $request->all();

        Post::query()->where('id', $id)->update($data);
        $post = Post::query()->with([
            'user',
            'category',
        ])->findOrFail($id);

        return response()->json($post);
    }

    /**
     * @OA\Delete(
     *     path="/api/posts/{id}",
     *     tags={"Posts"},
     *     summary="Delete post",
     *     description="Delete post",
     *     operationId="deletePost",
     *     deprecated=false,
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Post ID",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful Operation",
     *         @OA\JsonContent(ref="#/components/schemas/Post"),
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found",
     *     ),
     *     security={
     *         {"apiAuth": {}}
     *     }
     * )
     */
    public function delete(int $id, PostDeleteRequest $request): JsonResponse
    {
        $post = Post::query()->findOrFail($id);

        $post->delete();

        return response()->json($post);
    }
}