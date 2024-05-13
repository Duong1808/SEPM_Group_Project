<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class HomeController extends Controller
{

    public function get()
    {
        $categories = $this->model('categories')->getAllCategories();

        $this->view('frontend/homepage', ['categories' => $categories]);
    }
    public function search()
    {
        $categories = $this->model('categories')->getAllCategories();
        $this->view('frontend/plant-searching', ['categories' => $categories]);
    }
    public function category()
    {
        $categories = $this->model('categories')->getAllCategories();

        $plants = $this->model('plant')->searchPlantByName($_GET['name']);

        $this->view('frontend/category-page', ['plants' => $plants, 'categories' => $categories]);
    }
    public function detail($id)
    {
        $categories = $this->model('categories')->getAllCategories();

        $plants = $this->model('plant')->getPlantById($id);

        $this->view('frontend/plant-info', ['plants' => $plants, 'categories' => $categories]);
    }
}