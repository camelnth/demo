<?php

namespace App\Services\Externals\Images;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class ImageService
 *
 * @package App\Services\Externals\Images
 *
 * @author <tronghieudev@gmail.com>
 */
class ImageService implements ImageServiceInterface
{
    /**
     * @var Image
     */
    private $imageManagerStatic;

    /**
     * ImageService constructor.
     *
     * @param Image $imageManagerStatic
     */
    public function __construct(Image $imageManagerStatic)
    {
        $this->imageManagerStatic = $imageManagerStatic;
    }

    /**
     * Get image
     *
     * @param string $name
     * @param array $option
     *
     * @return mixed
     */
    public function get($name = '', $option = [])
    {
        $maxHeight = $option['max_height'] ?? config('image.max_height');
        $maxWidth = $option['max_width'] ?? config('image.max_width');

        if (empty($name) || ! Storage::exists($name)) {
            $image = $this->imageManagerStatic->make('notavailable.jpg');
            header('Content-Type: ' . config('image.type'));

            return $image->response();
        }

        $image = $this->imageManagerStatic->make(Storage::get($name));

        // Check max height
        if ($image->height() > $maxHeight) {
            $image->resize(null, $maxHeight, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        // Check max width
        if ($image->width() > $maxWidth) {
            $image->resize($maxWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        header('Content-Type: ' . config('image.type'));

        return $image->response();
    }

    /**
     * Get upload
     *
     * @param object $images
     * @param string $path
     * @param array $option
     *
     * @return mixed
     *
     * @author TienNguyen
     */
    public function upload($images, $path, $option = [])
    {
        if (is_array($images)) {
            $result = [];
            foreach ($images as $image) {
                $result[] = $this->storeImage($image, $path, $option);
            }

            return $result;
        }

        return $this->storeImage($images, $path, $option);
    }

    /**
     * Store image
     *
     * @param $image
     * @param $path
     * @param $option
     * @internal option $quality, $maxSize, $maxHeight, $maxWidth
     *
     * @return string
     */
    private function storeImage($image, $path, $option)
    {
        $quality = $option['quality'] ?? config('image.quality');
        $maxHeight = $option['max_height'] ?? config('image.max_height');
        $maxWidth = $option['max_width'] ?? config('image.max_width');
        $status = $option['status'] ?? config('image.status');

        $path = $this->getPathImage($path);
        $image = $this->imageManagerStatic->make($image);

        // Check max height
        if ($image->height() > $maxHeight) {
            $image->resize(null, $maxHeight, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        // Check max width
        if ($image->width() > $maxWidth) {
            $image->resize($maxWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        $image = $image->encode(config('image.extension'), $quality);
        Storage::put($path, $image->__toString(), $status);

        return $path;
    }

    /**
     * Delete image in storage
     *
     * @param $images
     *
     * @return mixed
     *
     * @author <tronghieudev@gmail.com>
     */
    public function delete($images)
    {
        return Storage::delete($images);
    }

    /**
     * Get path save image
     *
     * @param $path
     *
     * @return string
     *
     * @author <tronghieudev@gmail.com>
     */
    private function getPathImage($path)
    {
        $path = $path . (substr($path, -1) != '/' ? '/' : '');
        $folder = config('image.folder') . (substr(config('image.folder'), -1) != '/' ? '/' : '');

        return $folder . $path . str_random('20') . '_' . time() . '.' . config('image.extension');
    }
}
