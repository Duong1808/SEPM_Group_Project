<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <h2>Categories</h2>

    <!-- Form thêm danh mục -->
    <h3>Edit Category</h3>
    <form action="<?php echo url('admin/updateCategory'); ?>" method="GET">
        <label for="category_name">Category Name:</label>
        <?php
        foreach ($data['categories'] as $category) {
            $category_id = $category['id'];
            $category_name = $category['name'];
        ?>

        <input type="text" name="category_id" value="<?php echo $category_id; ?>" hidden>
        <input type="text" id="category_name" name="category_name" value="<?php echo $category_name; ?>" required>
        <?php
        }
        ?>
        <button type="submit">update Category</button>
    </form>
</body>

</html>