<?php



function get_all_pets(){
    $file_path="data/pets.csv";
    $handle = fopen($file_path, 'r');
    fgetcsv($handle);
    $pats_arr = array();
    while(! feof($handle))
    {
        array_push($pats_arr, fgetcsv($handle));
    }
    fclose($handle);
    return $pats_arr;
}

function get_pet_by_index($i){
    $pets = get_all_pets();
    return $pets[$i];
}

function add_pet($name, $type, $sound){
    $file_path="data/pets.csv";
    $handle = fopen($file_path, 'a');
    $pet = array($name, $type, $sound);
    fputcsv ($handle,$pet);
}