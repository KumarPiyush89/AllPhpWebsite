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
    <title>Marksheet</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include "Navigation.php";?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if(isset($_GET['name']))
                {
                    // form is filled so, save the form record
                    try
                    {
                        //create connection
                        $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        //create prepare statement 
                        $stmt=$conn->prepare("insert into marksheet(name,fname,mname,class,roll,hin,mat,sci,sst,eng,urd) values(:name,:fname,:mname,:class,:roll,:hin,:mat,:sci,:sst,:eng,:urd)");


                        //bind values
                        $stmt->bindValue(':name',$_GET['name']);
                        $stmt->bindValue(':fname',$_GET['fname']);
                        $stmt->bindValue(':mname',$_GET['mname']);
                        $stmt->bindValue(':class',$_GET['class']);
                        $stmt->bindValue(':roll',$_GET['roll']);
                        $stmt->bindValue(':hin',$_GET['hin']);
                        $stmt->bindValue(':mat',$_GET['mat']);
                        $stmt->bindValue(':sci',$_GET['sci']);
                        $stmt->bindValue(':sst',$_GET['sst']);
                        $stmt->bindValue(':eng',$_GET['eng']);
                        $stmt->bindValue(':urd',$_GET['urd']);

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
        </div>

        <div class="row">
            <div class="col-sm-4 bg-dark"></div>
            <div class="col-sm-4">
                <div class="mm">
                <div class="login-form">
                <form action="Firstpage.php" method="get">

                <div class="content text-center">
                    <div class="input-field">
                        <input type="text" placeholder="Name" name="name" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Father's Name" name="fname" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Mother's Name" name="mname" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Class" name="class" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Roll" name="roll" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Hindi" name="hin" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Math" name="mat" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Science" name="sci" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Socal Science" name="sst" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="English" name="eng" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Urdu" name="urd" required/>
                    </div>
                </div><br/>
                <div class="action text-center">
                    
                    
                    <button><input type="reset"/></button>
                    <button><input type="submit"/></button>
                </div>
                </form>
                </div>
                </div>
            </div>
            <div class="col-sm-4 bg-dark"></div>
        </div>    
    </div>
</body>
</html>