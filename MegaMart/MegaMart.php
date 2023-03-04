<?php
$conn = null;
$catlist = null;
$mulist = null;
try
{
    $conn = new PDO("mysql:host=localhost;dbname=megamart", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create statement
    $stmt1 = $conn->prepare("select * from category ");
    $stmt2 = $conn->prepare("select * from measurmentunits ");
    $stmt1->execute();
    $stmt2->execute();
    $catlist = $stmt1->fetchAll();
    $mulist = $stmt2->fetchAll();
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
</head>
<body>
    
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12">
            <?php include 'Navigation.php';?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <?php
            if(isset($_POST['iname']))
            {
                //validate/senetize form data

                //code for save data
                try {
                    $insertStatement = $conn->prepare("insert into items(iname,icat,munit,mrp,pprice,sprice) values(:iname,:icat,:munit,:mrp,:pprice,:sprice)");
                    $insertStatement->bindValue(":iname", $_POST['iname']);
                    $insertStatement->bindValue(":icat", $_POST['icat'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":munit", $_POST['munit'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":mrp", $_POST['mrp'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":pprice", $_POST['pprice'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":sprice", $_POST['sprice'], PDO::PARAM_INT);
                    $insertStatement->execute();
                    //get the id of inserted item
                    $lInsId=$conn->lastInsertId();
                    //save uploaded image with last inserted id
                    move_uploaded_file( $_FILES['img']['tmp_name'],"./itemImages/" . $lInsId . ".jpg");
                    echo <<<msg
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="panel panel-Success">
                    <div class="panel-heading">Success</div>
                    <div class="panel-body">Item inserted successfully with ID:$lInsId</div>
                    </div>
                    </div>
                  </div>
                  msg;

                }catch(Exception $ex)
                {
                    echo <<<msg
                        <div class="panel panel-danger">
                        <div class="panel-heading">Error!</div>
                        <div class="panel-body">{$ex->getmessage()}</div>
                        </div>
                        msg;
                }

            }
            ?>
            </div>    
        </div>


        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="MegaMart.php" method="POST" enctype="multipart/form-data">
                    <label>Item Name:</label>
                        <input type="text" name="iname" class="form-control" required/>
                    <label> Category:</label>
                        <select name="icat" class="form-control" >
                            <?php
                            foreach($catlist as $cat)
                            {
                                echo '<option value="' . $cat['cid'] . '">' . $cat['catname'] . '</option>';
                            }
                            ?>
                        </select>

                        <label>Measurment Unit:</label>
                            <select name="munit" class="form-control">
                                <?php
                                foreach($mulist as $mu)
                                {
                                    echo '<option value="' . $mu['muid'] . '">' . $mu['muname'] . '</option>';
                                }
                                ?>
                            </select>
                        <label>MRP:</label>
                        <input type="text" name="mrp" class="form-control" required/>
                        <label>Selling Price:</label>
                        <input type="text" name="sprice" class="form-control" required/>
                        <label>Purchase Price:</label>
                        <input type="text" name="pprice" class="form-control" required/>
                        <label>Image:</label>
                        <input type="file" accept=".jpg,.png" name="img" class="form-control" />
                        <input type="submit" value="Submit"/>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>

    </div>
</body>
</html>