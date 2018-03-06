<?php require_once 'actions/db_connect.php'; ?>

 

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

        .manageUser {
            width: 50%;
            margin: auto;

        }

        table {
            width: 100%;
            margin-top: 20px;
        }
    
    
        body{
            
            background: url("https://images.unsplash.com/photo-1508403233766-d611abbd37c5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7b39afa9ccb3945faa5735d0a413d980&auto=format&fit=crop&w=500&q=80");
            background-size: cover;
            background-position: center;
          
        }

        .wrapper{
            background-color: white;
            opacity: 0.7;
        }
   

    </style>

</head>
<body>


   



 <div id="main">


<br><br>
<div class="manageUser">
    <div class="wrapper">
    <h1>Table-User</h1><br>

    <a href="create.php"><button type="button">Add User</button></a>



    <table class="table table-bordered table-inverse">

        <thead>
            <tr>
                <th>Name</th>
                <th>Date of birth</th>
                <th>Active</th>
                <th>Option</th>
            </tr>
        </thead>


        <tbody>

            <?php
            $sql = "SELECT * FROM user WHERE active = 0";
            $result = $connect->query($sql);


            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['first_name']." ".$row['last_name']."</td>

                        <td>".$row['date_of_birth']."</td>
                        <td>".$row['active']."</td>

                        <td>
                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>
    </table>


   <!--*****************************************
                ZWEITE TABELLE
    *********************************************-->

<br><br>
    <table class="table table-bordered table-inverse">

        <thead>
            <tr>
                <th>Name</th>
                <th>Date of birth</th>
                <th>Active</th>
                <th>Option</th>
            </tr>
        </thead>


        <tbody>

            <?php
            $sql = "SELECT * FROM user WHERE active = 1";
            $result = $connect->query($sql);


            if($result->num_rows > 1) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['first_name']." ".$row['last_name']."</td>

                        <td>".$row['date_of_birth']."</td>
                        <td>".$row['active']."</td>

                        <td>
                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>

        </tbody>
    </table>
</div>

<br><br>
</div>
</div>
</body>
</html>