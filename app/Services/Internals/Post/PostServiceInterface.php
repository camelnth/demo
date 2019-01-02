<?php

namespace App\Services\Internals\Post;

/**
 * Interface PostServiceInterface
 *
 * @package App\Services\Internals\Post
 */
interface PostServiceInterface
{
    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function all($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function getList($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function show($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function getFirstBy($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function store($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function update($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function updateOrCreate($data = null, $options = null);

    /**
     * @param $data
     * @param $options
     *
     * @return mixed
     */
    public function destroy($data = null, $options = null);
}
