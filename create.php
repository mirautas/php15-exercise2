<!DOCTYPE html>

<html>
<head>

    <title>PHP CRUD  |  Add User</title>
    
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

 

<fieldset>

    <legend>Add User</legend>

 

    <form action="actions/a_create.php" method="post">
        <table class="table table-bordered table-inverse">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="first_name" placeholder="First Name" /></td>
            </tr>     


            <tr>
                <th>Last Name</th>
                <td><input type="text" name="last_name" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td><input type="text" name="date_of_birth" placeholder="Data of birth" /></td>
            </tr>


            <tr>
                <td><button type="submit">Insert user</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

 
</fieldset>

 

</body>

</html>