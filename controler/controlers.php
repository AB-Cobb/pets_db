<?php

function controler_create_pet (){
    global $title, $content;
    $title = "Create New Pet";
    $content = "view/create_pet.php";
}

function controler_view_all_pets(){
    global $title, $content, $pets;
    include ("model/pets.php");
    $title = "View Pets";
    $pets = get_all_pets();
    $content = "view/read_pets.php";
}

function controler_update_pet(){
    global $title, $content, $pet;
    include ("model/pets.php");
    $pet = get_pet_by_index($_GET["index"]);
    $content = "view/update_pet.php";
}

function controler_save_pet(){
    $name = $_POST["name"];
    $type = $_POST["type"];
    $sound = $_POST["sound"];
    $index = $_POST["index"];
    include ("model/pets.php");
    update_pet($name,$type,$sound, $index);
    header ("location:?page=read");
}

function controler_new_pet(){
    //echo "Hello from controller";
    $name = $_POST["name"];
    $type = $_POST["type"];
    $sound = $_POST["sound"];
    include ("model/pets.php");
    add_pet($name, $type, $sound);
    header ("location:?page=read");
}