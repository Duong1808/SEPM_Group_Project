<?php

use App\Libs\Database;

class CategoriesModel extends Database
{
    public function getAllCategories()
    {
        $sql = "SELECT id, name FROM categories";
        $result = $this->select($sql);
        return $result;
    }

    public function getCategoryById($id)
    {
        $id = mysqli_escape_string($this->link, $id);
        $sql = "SELECT id, name FROM categories WHERE id = '$id'";
        $result = $this->select($sql);
        return $result;
    }

    public function addCategory($name)
    {
        $name = mysqli_escape_string($this->link, $name);
        $sql = "INSERT INTO categories (name) VALUES ('$name')";
        $this->insert($sql);
        return $this->getLastInsertedId();
    }

    public function updateCategory($id, $name)
    {
        $id = mysqli_escape_string($this->link, $id);
        $name = mysqli_escape_string($this->link, $name);
        $sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";
        $this->update($sql);
    }

    public function deleteCategory($id)
    {
        $id = mysqli_escape_string($this->link, $id);
        $sql = "DELETE FROM categories WHERE id = '$id'";
        $this->delete($sql);
    }
}