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
    <title>update Record </title>
</head>
<body  style="background-color: #ffcfe8;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include 'Navigation.php'?>
            </div>
        </div>
        <?php
        try
        {
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $stmt=$conn->prepare("update store set iname=:iname,munite=:munite,mrp=:mrp,sprice=:sprice where id=:id");
            $stmt->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
            $stmt->bindValue(':iname',$_GET['iname']);
            $stmt->bindValue(':munite',$_GET['munite']);
            $stmt->bindValue(':mrp',$_GET['mrp']);
            $stmt->bindValue(':sprice',$_GET['sprice']);
            
            // execute Statement
            $stmt->execute();
            echo '<h1 class="animate__animated animate__infinite  animate__bounceInDown  text-center"><br/><br/><br/><br/><br/>Record Update Successfully.&#128526;<br/><br/><br/><br/><br/><br/></h1>';
            //echo '<h1 class="animate__animated animate__infinite   animate__bounceOutDown text-center"><br/><br/><br/><br/><br/>Record Update Successfully.&#128526;<br/><br/><br/><br/><br/><br/></h1>';

        }
        catch (Exception $e)
        {
            echo '<h1 class="text-center text-danger">'.$ex->getMessage()."</h1>";
        }
        ?>
    </div>
</body>
</html>