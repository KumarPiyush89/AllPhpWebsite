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
    <link rel="stylesheet" href="style.css"/>
    <title>FIle Upload</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?></div>
        </div>
        <div class="row">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="col-sm-4">
            <?php
                if(isset($_POST['name']))
                {
                    // form is filled so, save the form record
                    try
                    {
                        //create connection
                        $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        //create prepare statement 
                        $stmt=$conn->prepare("insert into upload(name,hindi,pic) values(:name,:hindi,:pic)");


                        //bind values
                        $stmt->bindValue(':name',$_POST['name'] );
                        $stmt->bindValue(':hindi',$_POST['hindi']);
                        $stmt->bindValue(':pic',$_POST['pic']);
                        

                        // execute Statement
                        $stmt->execute();
                        echo '<h1 class="text-center text-success animate__animated animate__zoomOutDown">  Record Added Successfully </h1>';
    

                    }
                    catch (Exception $e)
                    {
                        echo '<h1 class="text-center text-danger">'.$e->getMessage()."</h1>";
                    }
                }
            ?>
        </div>
        </form>
        <div class="col-sm-4 text-center"><br/><br/><hr/><h1>Hello Piyush</h1>
        <hr/>
        <form action="UploadFile.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter name " required/>   <hr/>
        <input type="text" name="hindi" placeholder="Enter hindi " required/> <hr/>
        <input type="file" name="pic" required class="form-control" /><hr/>
        <input type="submit" value="Upload"/>
        </form>
    </div>
        <div class="col-sm-4"></div>
    </div>
    </div>
</body>
</html>