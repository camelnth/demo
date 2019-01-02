<?php

namespace App\Services\Internals\Post;

use App\Services\Repositories\Post\PostRepositoryInterface;
use App\Services\Internals\BaseInternalService;

/**
 * Class PostService
 *
 * @package App\Services\Internals\Post
 */
class PostService extends BaseInternalService implements PostServiceInterface
{
    /**
     * PostService constructor.
     *
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repository = $postRepository;
    }
}