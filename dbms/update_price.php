<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACILITIES</title>
    <link rel="shortcut icon" type="x-icon" href="https://cdn-icons-png.flaticon.com/512/197/197722.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="margin:50px;">
<h2>FACILITIES DETAILS</h2>
    <table class="table">
<thead>

        <tr>
        <th> Department Name</th>
        <th> Duration </th>
        <th> Price </th>
        </tr>
</thead>
<tbody>
    <?php
    $server="localhost";
    $user="root";
    $password="";
    $database="login";
    $connection=new mysqli($server,$user,$password,$database);
    if($connection->connect_error){
        die("connection failed:".$connection->connect_error);
    }
    $sql="select * from facilities";
    $result=$connection->query($sql);
    if(!$result){
        die("Invalid query:".$connection->error);
    }
    while($row=$result->fetch_assoc()){
        echo " <tr>
        <td>".$row["department"]."</td>
        <td>".$row["duration"]."</td>
        <td>".$row["price"]."</td>
        <td>
        <a class='btn btn-primary btn-sm' href='edit_price.php?rn=$row[department]'>Edit</a>
        </td>
       </tr> ";
    }
    ?>
</tbody>

    </table>
    
</body>
</html>