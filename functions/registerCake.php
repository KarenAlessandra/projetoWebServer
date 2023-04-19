<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_FILES["File"]["name"])) {
        $image_err = "Por favor, insira uma imagem.";
    } else {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["File"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = array("jpg", "jpeg", "png");
        if (!in_array($imageFileType, $allowed_types)) {
            $image_err = "Somente arquivos JPG, JPEG e PNG são permitidos.";
        } else {
            move_uploaded_file($_FILES["File"]["tmp_name"], $target_file);
            $image = $target_file;
        }

        if (empty($_POST["Price"])) {
            $price_err = "Por favor, insira o valor do bolo.";
        } else {
            $price = test_input($_POST["Price"]);
            if (!preg_match("/^\d+(\.\d{2})?$/", $price)) {
                $price_err = "O valor deve ser um número no formato xx,xx.";
            }
        }


        if (empty($_POST["NameCake"])) {
            $name_err = "Por favor, insira o título do bolo.";
        } else {
            $name = test_input($_POST["NameCake"]);
        }


        if (empty($_POST["Description"])) {
            $description_err = "Por favor, insira a descrição do bolo.";
        } else {
            $description = test_input($_POST["Description"]);
        }


        if (empty($_POST["Weight"])) {
            $weight_err = "Por favor, insira o peso do bolo.";
        } else {
            $weight = test_input($_POST["Weight"]);
            if (!preg_match("/^\d+(\.\d{2})?$/", $weight)) {
                $weight_err = "O peso deve ser um número no formato xx,xx.";
            }
        }

        if (empty($image_err) && empty($price_err) && empty($name_err) && empty($description_err) && empty($weight_err)) {
            registerCake($image, $price, $name, $description, $weight);
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function registerCake($image, $price, $name, $description, $weight)
{
}
?>