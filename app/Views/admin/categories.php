<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #f5f5f5;
    }
    </style>
    <style>
    form {
        width: 300px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 16px;
    }

    textarea {
        height: 100px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h2>Categories</h2>

    <!-- Form thêm danh mục -->
    <h3>Add New Category</h3>
    <form action="<?php echo url('admin/addcategory'); ?>" method="GET">
        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>
        <button type="submit">Add Category</button>
    </form>

    <!-- Bảng danh sách danh mục -->
    <h3>List of Categories</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lặp qua danh sách các danh mục và hiển thị trong bảng
            foreach ($data['categories'] as $category) {
                $category_id = $category['id'];
                $category_name = $category['name'];
            ?>
            <tr>
                <td><?php echo $category_id; ?></td>
                <td><?php echo $category_name; ?></td>
                <td>
                    <!-- Nút sửa -->
                    <a href="<?php echo url('admin/edit_categories/' . $category_id); ?>">Edit</a>

                    <!-- Nút xóa -->
                    <a href="<?php echo url('admin/deleteCategory/' . $category_id); ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>