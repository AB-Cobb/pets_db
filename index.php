<?php require ("controler/router.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Pets db front end">
    <meta name="keywords" content="mvc crud">
    <meta name="author" content="Andrew Cobb">
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php

include ("view/nav.php");
include ($content);
include ("view/footer.php");
?>

</body>
</html>