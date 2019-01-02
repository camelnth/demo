<?php

namespace App\Services\Repositories\Category;

use App\Models\Category;
use App\Services\Repositories\BaseRepository;

/**
 * Class CategoryEloquentRepository
 *
 * @package App\Services\Repositories\Category
 */
class CategoryEloquentRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * @return mixed|string
     */
    public function model()
    {
        return Category::class;
    }

    /**
     * @param object $params
     *
     * @return mixed
     */
    public function mask($params)
    {
        if (! empty($params->option('id'))) {
            $this->method('where', 'id', $params->option('id'));
        }

        return $this;
    }

    /**
     * @param object $params
     *
     * @return mixed
     */
    public function filter($params)
    {
        if (! empty($params->get('id'))) {
            $this->method('where', 'id', $params->get('id'));
        }

        return $this;
    }
}