
<form action="save_pet" method="post">

    <label for=name>Name</label><input type=text name="name" id=name value=<?php echo $pet[0]; ?>><br>
    <label for=type>Type</label><input type=text name="type" id=type value=<?php echo $pet[1]; ?>><br>
    <label for=sound>Sound</label><input type=text name="sound" id=sound value=<?php echo $pet[2]; ?>><br>
    <input type=hidden name=index value=<?php echo $_GET["index"] ?>>
    <input type=submit value="Update Pet">
</form>