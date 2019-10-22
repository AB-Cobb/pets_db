<?php
$page = isset($_GET["page"]) ?  $_GET["page"] : "read";
require ("controler/controlers.php");
switch ($page){
    case "create":
        controler_create_pet();
        break;
    case "read":
        controler_view_all_pets();
        break;
    case "update":
        controler_update_pet();
        break;
    case "add_pet":
        controler_new_pet();
        break;
    case "save_pet":
        controler_save_pet();
        break;
    case "delete":
        break;
}