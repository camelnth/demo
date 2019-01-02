<?php

namespace App\Services\Repositories\Post;

/**
 * Interface PostRepositoryInterface
 *
 * @package App\Services\Repositories\Post
 */
interface PostRepositoryInterface
{
    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function all($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function getList($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function find($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function first($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function create($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function update($params);

    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function updateOrCreate($params);
    
    /**
     * @param object $params
     *
     * @internal params array $data
     * @internal params array $options
     *
     * @return mixed
     */
    public function destroy($params);
}
