
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>php</title>

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

<div class="container"><br><br>

    <fieldset>

<?php


require_once 'db_connect.php';


if($_POST) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['date_of_birth'];

 
    $sql = "INSERT INTO user (first_name, last_name, date_of_birth) VALUES ('$fname', '$lname', '$dob')";

    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

 
    $connect->close();

}

?>

</fieldset>
</div>
    
</body>
</html>