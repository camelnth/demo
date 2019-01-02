<?php

namespace App\Services\Internals\Category;

use App\Services\Repositories\Category\CategoryRepositoryInterface;
use App\Services\Internals\BaseInternalService;

/**
 * Class CategoryService
 *
 * @package App\Services\Internals\Category
 */
class CategoryService extends BaseInternalService implements CategoryServiceInterface
{
    /**
     * CategoryService constructor.
     *
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->repository = $categoryRepository;
    }

}