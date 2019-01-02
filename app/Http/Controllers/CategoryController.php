<?php

namespace App\Http\Controllers;

use App\Services\Internals\Category\CategoryServiceInterface;
use Faker\Factory;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryServiceInterface
     */
    private $service;

    /**
     * CategoryController constructor.
     *
     * @param CategoryServiceInterface $service
     */
    public function __construct(CategoryServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getList([
            'name' => 'Truyện tranh',
            'slug' => 'truyen-tranh'
        ]);

        dd($categories);
    }

    public function show($id)
    {
        $category = $this->service->show(['id' => $id]);

        dd($category);
    }

    public function store(Request $request)
    {
        $name = Factory::create()->name;

        $category = $this->service->store([
            'name' => $name,
            'slug' => str_slug($name)
        ], ['limit' => 20]);

        dd($category);
    }

    public function update(Request $request)
    {
        $name = Factory::create()->name;

        $category = $this->service->update(
            [
                'name' => $name,
                'slug' => str_slug($name)
            ],
            ['id' => 10]
        );

        dd($category);
    }

    public function delete(Request $request)
    {
        $category = $this->service->destroy(['id' => 5]);

        dd($category);
    }
}