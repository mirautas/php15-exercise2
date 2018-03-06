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

    <title>Edit User</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 

    <style type="text/css">

        fieldset {

            margin: auto;
            margin-top: 100px;
            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

<div class="container">

 

<fieldset>

    <legend>Update user</legend>

 

    <form action="actions/a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>First Name</th>

                <td><br><input type="text" name="first_name" placeholder="First Name" value="<?php echo $data['first_name'] ?>" /></td>

            </tr>     

            <tr>

                <th>Last Name</th>

                <td><br><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $data['last_name'] ?>" /></td>

            </tr>

            <tr>

                <th>Date of birth</th>

                <td><br><input type="text" name="date_of_birth" placeholder="Date of birth" value="<?php echo $data['date_of_birth'] ?>" /></td>

            </tr>

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><br><button type="submit">Save Changes</button></td>

                <td><a href="index.php"><br><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 
</div>
</body>

</html>

 

<?php

}

?>