<?php

namespace App\Services\Repositories\Post;

use App\Models\Post;
use App\Services\Repositories\BaseRepository;

/**
 * Class PostEloquentRepository
 *
 * @package App\Services\Repositories\Post
 */
class PostEloquentRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Post::class;
    }
}