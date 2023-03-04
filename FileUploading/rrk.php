<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Superheroes</title>
</head>
<style>
     body 
    {
        background-image:url('marvel.jpg');
        background-size: cover;
    }
     h1
    {
        color:white;
        text-align: center;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 10px;
        font-family: fantasy;
        background-image:url('marvel.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        opacity:100%;
        box-shadow: 5px 5px 2px rgba(131, 8, 8, 0.5);
    }
</style>
<body>
    <div class="container-fluid">
         <div class="row">
            <?php include 'navigation.php'; ?>
         </div>
    </div>
    <?php
         /*Create Connections */
         try
         {
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            /*Prepare Connections */
                $stmt=$conn->prepare("insert into upload(name,hindi) values(:name,:hindi)");
            
            /* Bind Value To statement*/
                $stmt->bindValue(':name',$_POST['name']);
                $stmt->bindValue(':hindi',$_POST['hindi']);

             /*4. Execute Statement*/
                $stmt->execute();
                $stmt = $conn->prepare("select * from uploaf order by id desc");
                $stmt->execute();
                $rec=$stmt->fetchAll();
                
                if(move_uploaded_file($_FILES['pic']["tmp_name"],"./PHOTO/".$_FILES['pic']["name"]))
                {
                    echo "File Uploaded Successfully.";
                }
                else{
                    echo "File already available.";
        
                }
         } 
             catch (Exception $ex) 
         {
            echo "<h2>" . $ex->getMessage()."</h2>";
         }
    ?>
</body>
</html>