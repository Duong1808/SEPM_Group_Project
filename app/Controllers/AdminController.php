<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class AdminController extends Controller
{

    public function plants()
    {
        $plants = $this->model('plant')->getAllPlants();
        $this->view('admin/plants', ['plants' => $plants]);
    }
    public function categories()
    {
        $categories = $this->model('categories')->getAllCategories();
        $this->view('admin/categories', ['categories' => $categories]);
    }
    public function addplant()
    {
        $this->model('plant')->addPlant($_GET);
        redirect('admin/plants');
    }
    public function edit_categories($id)
    {
        $categories = $this->model('categories')->getCategoryById($id);
        $this->view('admin/edit_categories', ['categories' => $categories]);
    }
    public function editplant($id)
    {
        $plants = $this->model('plant')->getPlantById($id);
        $this->view('admin/edit_plants', ['plants' => $plants]);
    }
    public function addcategory()
    {
        $this->model('categories')->addCategory($_GET['category_name']);

        $this->view('admin/categories');
    }
    public function deleteCategory($id)
    {
        $this->model('categories')->deleteCategory($id);
        redirect('admin/categories');
    }
    public function deleteplant($id)
    {

        $this->model('plant')->deletePlant($id);
        redirect('admin/plants');
    }
    public function updateCategory()
    {

        $this->model('categories')->updateCategory($_GET['category_id'], $_GET['category_name']);
        redirect('admin/categories');
    }
    public function updatePlant()
    {

        $this->model('plant')->updatePlant($_GET['plant_id'], $_GET);
        redirect('admin/plants');
    }
}