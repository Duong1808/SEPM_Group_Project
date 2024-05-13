<?php

use App\Libs\Database;

class PlantModel extends Database
{
    public function getAllPlants()
    {
        $sql = "SELECT * FROM plants";
        $result = $this->select($sql);
        return $result;
    }

    public function getPlantById($id)
    {
        $id = mysqli_escape_string($this->link, $id);
        $sql = "SELECT * FROM plants WHERE id = '$id'";
        $result = $this->select($sql);
        return $result;
    }
    public function searchPlantByName($keyword)
    {
        $keyword = mysqli_escape_string($this->link, $keyword);
        $sql = "SELECT * FROM plants WHERE genus_name LIKE '%$keyword%'";
        $result = $this->select($sql);
        return $result;
    }
    public function addPlant($data)
    {
        $genusName = mysqli_escape_string($this->link, $data['genus_name']);
        $commonName = mysqli_escape_string($this->link, $data['common_name']);
        $plantType = mysqli_escape_string($this->link, $data['plant_type']);
        $imageUrl = mysqli_escape_string($this->link, $data['image_url']); // Escape image_url

        // Escape and process other fields similarly...

        $sql = "INSERT INTO plants 
                (genus_name, common_name, plant_type, light, height, width, flower_color, foliage_color, 
                season_features, special_features, zones, propagation, problem_solvers, details, 
                where_to_plant, when_to_plant, care_tips, reputable_address, image_url)
                VALUES 
                ('$genusName', '$commonName', '$plantType', '{$data['light']}', '{$data['height']}', '{$data['width']}', 
                '{$data['flower_color']}', '{$data['foliage_color']}', '{$data['season_features']}', '{$data['special_features']}', 
                '{$data['zones']}', '{$data['propagation']}', '{$data['problem_solvers']}', '{$data['details']}', 
                '{$data['where_to_plant']}', '{$data['when_to_plant']}', '{$data['care_tips']}', '{$data['reputable_address']}', '$imageUrl')";

        $this->insert($sql);
        return $this->getLastInsertedId();
    }

    public function updatePlant($id, $data)
    {
        $id = mysqli_escape_string($this->link, $id);
        $genusName = mysqli_escape_string($this->link, $data['genus_name']);
        $commonName = mysqli_escape_string($this->link, $data['common_name']);
        $plantType = mysqli_escape_string($this->link, $data['plant_type']);
        $imageUrl = mysqli_escape_string($this->link, $data['image_url']); // Escape image_url

        // Escape and process other fields similarly...

        $sql = "UPDATE plants SET 
                genus_name = '$genusName', 
                common_name = '$commonName', 
                plant_type = '$plantType', 
                light = '{$data['light']}', 
                height = '{$data['height']}', 
                width = '{$data['width']}', 
                flower_color = '{$data['flower_color']}', 
                foliage_color = '{$data['foliage_color']}', 
                season_features = '{$data['season_features']}', 
                special_features = '{$data['special_features']}', 
                zones = '{$data['zones']}', 
                propagation = '{$data['propagation']}', 
                problem_solvers = '{$data['problem_solvers']}', 
                details = '{$data['details']}', 
                where_to_plant = '{$data['where_to_plant']}', 
                when_to_plant = '{$data['when_to_plant']}', 
                care_tips = '{$data['care_tips']}', 
                reputable_address = '{$data['reputable_address']}', 
                image_url = '$imageUrl'
                WHERE id = '$id'";

        $this->update($sql);
    }

    public function deletePlant($id)
    {
        $id = mysqli_escape_string($this->link, $id);
        $sql = "DELETE FROM plants WHERE id = '$id'";
        $this->delete($sql);
    }
}