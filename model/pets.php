<?php




function get_all_pets(){
    $file_path="data/pets.csv";
    $handle = fopen($file_path, 'r');
    fgetcsv($handle);
    $pats_arr = array();
    while(! feof($handle))
    {
        $line = fgetcsv($handle);
        if (!empty($line))
            array_push($pats_arr, $line);
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
    fclose($handle);
}

function update_pet($name,$type,$sound, $index){
    $pets = get_all_pets();
    $pet = [$name,$type,$sound];
    $pets[$index] = $pet;
    $file_path="data/pets.csv";
    $handle = fopen($file_path, 'w');
    fputcsv($handle,['name','type','sound']);
    foreach ($pets as $line){
        fputcsv($handle,$line);
    }
    fclose($handle);
}

function delete_pet($i){
    $file_path="data/pets.csv";
    $pets = get_all_pets();
    unset($pets[$i]);
    $handle = fopen($file_path, 'w');
    fputcsv($handle,['name','type','sound']);
    foreach ($pets as $line){
        fputcsv($handle,$line);
    }
    fclose($handle);
}