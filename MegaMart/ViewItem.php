<?php
$conn = null;
$allItems = null;
try
{
    $conn = new PDO("mysql:host=localhost;dbname=megamart", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create statement
    $stmt = $conn->prepare("select * from items");
    $stmt->execute();
    $allItems = $stmt->fetchAll();
   
}catch(Exception $ex)
{
    echo "<h1>" . $ex->getMessage() . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="ViewItem.css">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-12">
            <?php include 'Navigation.php';?>
            </div>
    </div>
    <?php
    $i = 0;
        foreach($allItems as $item)
        {
            if($i%4==0)
            {
            echo '<hr/><br/><div class="row">';
            }
        echo <<<msg
            <div class="col-sm-3">
            <div class="card">
            <img src="./ItemImages/{$item['iid']}.jpg" class="card-img-top" alt="{$item['iname']}" />
            <div class="card-body">
            <h5 class="card-title">{$item['iname']}</h5>
            <p class="card-text"><b>MRP:<del>{$item['mrp']}</del> Rs.{$item['sprice']}</b></p>
            <!--<a href="#" class="btn btn-primary">Add to card</a>
            <a href="#" class="btn btn-success">Buy Now</a>-->
            <div class="row">
                <div class="col-sm-6 text-left"><a href="#" class="btn btn-primary ">Add to card</a></div>
                <div class="col-sm-6 text-right"><a href="#" class="btn btn-success ">Buy Now</a></div>
            </div>
            </div>
            </div>
            </div>
            msg;
        
    if ($i != 0 && $i % 3 == 0)
        echo '</div>';
    $i++;
        }
        $i--;
    if ($i != 0 && $i % 3 != 0)
        echo "</div>";
    ?>
    </div>
</body>