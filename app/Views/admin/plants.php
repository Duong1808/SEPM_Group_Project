<!DOCTYPE html>
<html>

<head>
    <title>Add Plant</title>
</head>
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

<body>
    <h2>Add plant</h2>
    <form action="<?php url('admin/addplant') ?>" method="GET">
        <label for="genus_name">Genus name:</label><br>
        <input type="text" id="genus_name" name="genus_name"><br><br>

        <label for="common_name">Common name:</label><br>
        <input type="text" id="common_name" name="common_name"><br><br>

        <label for="plant_type">Plant type:</label><br>
        <input type="text" id="plant_type" name="plant_type"><br><br>

        <label for="light">Light:</label><br>
        <input type="text" id="light" name="light"><br><br>

        <label for="height">Height:</label><br>
        <input type="text" id="height" name="height"><br><br>

        <label for="width">Width:</label><br>
        <input type="text" id="width" name="width"><br><br>

        <label for="flower_color">Flower color:</label><br>
        <input type="text" id="flower_color" name="flower_color"><br><br>

        <label for="foliage_color">Foliage color:</label><br>
        <input type="text" id="foliage_color" name="foliage_color"><br><br>

        <label for="season_features">Season features:</label><br>
        <textarea id="season_features" name="season_features"></textarea><br><br>

        <label for="special_features">Special features:</label><br>
        <textarea id="special_features" name="special_features"></textarea><br><br>

        <label for="zones">Zone:</label><br>
        <input type="text" id="zones" name="zones"><br><br>

        <label for="propagation">Propagation:</label><br>
        <textarea id="propagation" name="propagation"></textarea><br><br>

        <label for="problem_solvers">Problem solvers:</label><br>
        <textarea id="problem_solvers" name="problem_solvers"></textarea><br><br>

        <label for="details">Details:</label><br>
        <textarea id="details" name="details"></textarea><br><br>

        <label for="where_to_plant">Where to plant:</label><br>
        <textarea id="where_to_plant" name="where_to_plant"></textarea><br><br>

        <label for="when_to_plant">When to plant:</label><br>
        <textarea id="when_to_plant" name="when_to_plant"></textarea><br><br>

        <label for="care_tips">Care tips:</label><br>
        <textarea id="care_tips" name="care_tips"></textarea><br><br>

        <label for="reputable_address">Reputable address:</label><br>
        <textarea id="reputable_address" name="reputable_address"></textarea><br><br>

        <label for="image_url">Image URL:</label><br>
        <input type="text" id="image_url" name="image_url"><br><br>

        <input type="submit" value="Add">
    </form>
    <h2>Plant List</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Genus name</th>
                <th>Common name</th>
                <th>Plant type</th>
                <th>Light</th>
                <th>Height</th>
                <th>Width</th>
                <th>Flower color</th>
                <th>Foliage color</th>
                <th>Season features</th>
                <th>Special features</th>
                <th>Zone</th>
                <th>Propagation</th>
                <th>Problem solvers</th>
                <th>Details</th>
                <th>Where to plant</th>
                <th>When to plant</th>
                <th>Care tips</th>
                <th>Reputable address</th>
                <th>Image URL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lặp qua danh sách cây cảnh và hiển thị trong bảng
            foreach ($data['plants'] as $plant) {
                $plant_id = $plant['id'];
                $genus_name = $plant['genus_name'];
                $common_name = $plant['common_name'];
                $plant_type = $plant['plant_type'];
                $light = $plant['light'];
                $height = $plant['height'];
                $width = $plant['width'];
                $flower_color = $plant['flower_color'];
                $foliage_color = $plant['foliage_color'];
                $season_features = $plant['season_features'];
                $special_features = $plant['special_features'];
                $zones = $plant['zones'];
                $propagation = $plant['propagation'];
                $problem_solvers = $plant['problem_solvers'];
                $details = $plant['details'];
                $where_to_plant = $plant['where_to_plant'];
                $when_to_plant = $plant['when_to_plant'];
                $care_tips = $plant['care_tips'];
                $reputable_address = $plant['reputable_address'];
                $image_url = $plant['image_url'];
            ?>
            <tr>
                <td><?php echo $plant_id; ?></td>
                <td><?php echo $genus_name; ?></td>
                <td><?php echo $common_name; ?></td>
                <td><?php echo $plant_type; ?></td>
                <td><?php echo $light; ?></td>
                <td><?php echo $height; ?></td>
                <td><?php echo $width; ?></td>
                <td><?php echo $flower_color; ?></td>
                <td><?php echo $foliage_color; ?></td>
                <td><?php echo $season_features; ?></td>
                <td><?php echo $special_features; ?></td>
                <td><?php echo $zones; ?></td>
                <td><?php echo $propagation; ?></td>
                <td><?php echo $problem_solvers; ?></td>
                <td><?php echo $details; ?></td>
                <td><?php echo $where_to_plant; ?></td>
                <td><?php echo $when_to_plant; ?></td>
                <td><?php echo $care_tips; ?></td>
                <td><?php echo $reputable_address; ?></td>
                <td><?php echo $image_url; ?></td>
                <td>
                    <!-- Nút sửa -->
                    <a href="<?php echo url('admin/editplant/' . $plant_id); ?>">Edit</a>

                    <!-- Nút xóa -->
                    <a href="<?php echo url('admin/deleteplant/' . $plant_id); ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>