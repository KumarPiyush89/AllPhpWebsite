<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Person</title>
</head>
<body>
    <h1>All Person</h1>
    <?php
    /* create connection*/
    $conn=new PDO("mysql:host=localhost;dbname=admitcard;","root","");

    /*preapre statement*/
    $stmt=$conn->prepare("select * from person");
    
    //Execute statement
    $stmt->execute();

    //Fetch record
    $persons=$stmt->fetchAll();
  ?>
  <table>
    <?php
    foreach($persons as $person )
    {
        echo "<tr><td>".$person['pid'].'</td><td>'.$person['name']."</td><td>".$person['gender']."</td><td>".$person['age']."</td></tr>";
    }
    ?>

</table>
<a href="index.html"><button>Add New Person</button></a>
</body>
</html>