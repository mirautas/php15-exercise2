<?php


require_once 'actions/db_connect.php';


if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM user WHERE id = {$id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

 
    $connect->close();

?>

 

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

        .manageUser {
            width: 50%;
            margin: auto;

        }

        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
    
    body{
        background: url("#");
        background-repeat: no-repeat;
        background-position: center top;
    }

    </style>


</head>
<body>

<div class="container">

	<fieldset>

<h3>Do you really want to delete this user?</h3>

<form action="actions/a_delete.php" method="post">

 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>

</form>

 </fieldset>
</div>
</body>
</html>

 
<?php

}

?>

