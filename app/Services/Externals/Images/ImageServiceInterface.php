<?php

namespace App\Services\Externals\Images;

/**
 * Interface ImageServiceInterface
 *
 * @package App\Services\Externals\Images
 *
 * @author <tronghieudev@gmail.com>
 */
interface ImageServiceInterface
{
    /**
     * Get image
     *
     * @param string $name
     * @param array $option
     *
     * @return mixed
     */
    public function get($name = '', $option = []);

    /**
     * Get upload
     *
     * @param object $images
     * @param string $path
     * @param array $option
     *
     * @return mixed
     */
    public function upload($images, $path, $option = []);

    /**
     * @param $images
     *
     * @return mixed
     *
     * @author <tronghieudev@gmail.com>
     */
    public function delete($images);
}
