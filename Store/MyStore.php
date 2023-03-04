<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <title>MyStore</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include "Navigation.php";?><br/><br/><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label>Item Name</label>
                <!--<input type="text" name="iname" class="form-control" placeholder="T-shirt" required/>-->

            </div>
            <div class="col-sm-4">
            <h1 class="text-center animate__animated animate__zoomOutDown animate__repeat-1 animate__delay-2s text-center text-success ">RECORDED ADDED SUCCESSFULLY</h1>
                <form action="MyStore.php" method="get">
                <label>ITEM NAME</label>
                <input type="text" name="iname" class="form-control" placeholder="T-Shirt" />
                <label>ITEM MESURMENT UNIT</label>
                <input type="text" name="munite" class="form-control" placeholder="xxxxx" />
                <label>INPUT MRP</label>
                <input type="text" name="mrp" class="form-control" placeholder="xxxxx" />
                <label>SELLING PRICE</label>
                <input type="text" name="sprice" class="form-control" placeholder="xxxxx"/>
                <div class="row">
                    <div class="col-sm-6"><br/><input type="reset"class="btn bg-danger text-light "/></div>
                    <div class="col-sm-6"><br/><input type="submit" class="btn bg-success text-light "/></div>
                </div>
                </form>
            </div>
            <div class="col-sm-4">
                
            <?php
            try{
            // Create Connection
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Create Prepare Statement
            $stmt = $conn->prepare("insert into store(iname,munite,mrp,sprice) values(:iname,:munite,:mrp,:sprice)");
            //BInd values to statement
            $stmt->bindValue(':iname',$_GET['iname']);
            $stmt->bindValue(':munite',$_GET['munite']);
            $stmt->bindValue(':mrp',$_GET['mrp']);
            $stmt->bindValue(':sprice',$_GET['sprice']);

            //Eecute The Statement
            $stmt->execute();
            echo "<h1 class='text-center'>.</h1>";

        }
        catch(Exception $e)
        {
            echo"<h1>".$e->getMessage()."</h1>";
        }
        ?>
            </div>
        </div>
    </div>
</body>
</html>