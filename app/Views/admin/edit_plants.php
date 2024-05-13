<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
    <h2>Edit Plant</h2>
    <form action="<?php echo url('admin/updatePlant'); ?>" method="GET">
        <?php foreach ($data['plants'] as $plant) { ?>
        <input type="hidden" name="plant_id" value="<?php echo $plant['id']; ?>">

        <label for="genus_name">Genus name:</label><br>
        <input type="text" id="genus_name" name="genus_name" value="<?php echo $plant['genus_name']; ?>"><br><br>

        <label for="common_name">Common name:</label><br>
        <input type="text" id="common_name" name="common_name" value="<?php echo $plant['common_name']; ?>"><br><br>

        <label for="plant_type">Plant type:</label><br>
        <input type="text" id="plant_type" name="plant_type" value="<?php echo $plant['plant_type']; ?>"><br><br>

        <label for="light">Light:</label><br>
        <input type="text" id="light" name="light" value="<?php echo $plant['light']; ?>"><br><br>

        <label for="height">Height:</label><br>
        <input type="text" id="height" name="height" value="<?php echo $plant['height']; ?>"><br><br>

        <label for="width">Width:</label><br>
        <input type="text" id="width" name="width" value="<?php echo $plant['width']; ?>"><br><br>

        <label for="flower_color">Flower color:</label><br>
        <input type="text" id="flower_color" name="flower_color" value="<?php echo $plant['flower_color']; ?>"><br><br>

        <label for="foliage_color">Foliage color:</label><br>
        <input type="text" id="foliage_color" name="foliage_color"
            value="<?php echo $plant['foliage_color']; ?>"><br><br>

        <label for="season_features">Season features:</label><br>
        <textarea id="season_features"
            name="season_features"><?php echo $plant['season_features']; ?></textarea><br><br>

        <label for="special_features">Special features:</label><br>
        <textarea id="special_features"
            name="special_features"><?php echo $plant['special_features']; ?></textarea><br><br>

        <label for="zones">Zones:</label><br>
        <input type="text" id="zones" name="zones" value="<?php echo $plant['zones']; ?>"><br><br>

        <label for="propagation">Propagation:</label><br>
        <textarea id="propagation" name="propagation"><?php echo $plant['propagation']; ?></textarea><br><br>

        <label for="problem_solvers">Problem solvers:</label><br>
        <textarea id="problem_solvers"
            name="problem_solvers"><?php echo $plant['problem_solvers']; ?></textarea><br><br>

        <label for="details">Details:</label><br>
        <textarea id="details" name="details"><?php echo $plant['details']; ?></textarea><br><br>

        <label for="where_to_plant">Where to plant:</label><br>
        <textarea id="where_to_plant" name="where_to_plant"><?php echo $plant['where_to_plant']; ?></textarea><br><br>

        <label for="when_to_plant">When to plant:</label><br>
        <textarea id="when_to_plant" name="when_to_plant"><?php echo $plant['when_to_plant']; ?></textarea><br><br>

        <label for="care_tips">Care tips:</label><br>
        <textarea id="care_tips" name="care_tips"><?php echo $plant['care_tips']; ?></textarea><br><br>

        <label for="reputable_address">Reputable address:</label><br>
        <textarea id="reputable_address"
            name="reputable_address"><?php echo $plant['reputable_address']; ?></textarea><br><br>

        <label for="image_url">Image URL:</label><br>
        <input type="text" id="image_url" name="image_url" value="<?php echo $plant['image_url']; ?>"><br><br>

        <input type="submit" value="Sửa cây cảnh">
        <?php } ?>
    </form>


</body>

</html>