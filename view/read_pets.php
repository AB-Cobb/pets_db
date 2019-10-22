
<table style>
    <tr>
        <th> Name </th>
        <th> Type </th>
        <th> Sound </th>
    <tr>
<?php
//echo $pets;
    $index = 0;
    foreach ($pets as $pet){
        //var_dump($pet);
        echo "
            <tr>
                <td>$pet[0]</td>
                <td>$pet[1]</td>
                <td>$pet[2]</td>
                <td><a href=?page=update&index=$index >update</a></td>
            </tr>
            ";
            $index++;
    }// */

?>
</table>