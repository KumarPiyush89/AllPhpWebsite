<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="Registration1.css"/>
    <title>Register Donor</title>
    
    <style>strong
{
    text-shadow: 4px 4px 4px black;
    color:red;
}</style>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row"><div class="col-sm-12"><img src="customLogo.jpg"  style="height: 350px; width:100%;"/></div></div>
        <div class="row">
            <div class="col-sm-12 text-center"><h1><b><strong>DONOR REGISTER</strong></b></h1></div>
        </div>
        <div class="row">
            <div class="col-sm-4 bg-light"></div>
            <div class="col-sm-4" style="background-image: url(download.png); background-repeat: no-repeat;">
                <form action="RegisterDonor.php" method="get" class=" text-center">
                            
                    <div class="row">
                        <div class="col-sm-6 text-danger"><br/><br/>
                            <label><b><h2>Full Name: </h2></b></label><br/><br/>
                            <label><b><h2>Blood Group: </h2></b></label><br/><br/>
                            <label><b><h2>Gender: </h2></b></label><br/><br/>
                            <label><b><h2>Age: </h2></b></label><br/><br/>
                            <label><b><h2>Weight: </h2></b></label><br/><br/>
                            <label><b><h2>Last Donation: </h2></b></label><br/><br/>
                            <label><b><h3>Phone Number: </h3></b></label><br/><br/>
                            <label><b><h2>Address: </h2></b></label>
                        </div>
                        <div class="col-sm-6"><br/><br/>
                            <input type="text" class="form-control" name="name" id="name" /><br/><br/>
                            <select class="form-select" name="bgroup">
                                <option type="radio" value="A+" >A+</option>
                                <option type="radio" value="A-" >A-</option>
                                <option type="radio" value="B+" >B+</option>
                                <option type="radio" value="B-" >B-</option>
                                <option type="radio" value="AB+" >AB+</option>
                                <option type="radio" value="AB-" >AB-</option>
                                <option type="radio" value="O+" >O+</option>
                                <option type="radio" value="O-" >O-</option>
                            </select><br/>
                            <input type="radio" name="gender" value="male" checked><label>Male</label>
                            <input type="radio" name="gender" value="female"><label>Female</label><br/>
                            <input type="radio" name="gender" value="third"><label>Third Gender</label><br/><br/>
                            <input type="number"  name="age" id="age" class="form-control"/><br/>
                            <input type="number" name="weight" id="weight" class="form-control"/><br/>
                            <input type="date"  name="last" id="last" class="form-control"/><br/><br/>
                            <input type="number" name="number" id="number" class="form-control"/><br/>
                            <input type="address" name="address" id="address" class="form-control"/><br/>

                        </div>
                        <div class="row">
                            <div class="col-sm-6"><input type="reset" class="btn btn-danger"/></div>
                            <div class="col-sm-6"><input type="submit" class="btn btn-success"/></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 bg-light"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 bg-info">
                    <?php
                    try
                    {
                        // Create Connection
                        $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // Create Prepare Statement
                        $stmt =$conn->prepare("insert into blooddonation(name,bgroup,gender,age,weight,last,number,address) values(:name,:bgroup,:gender,:age,:weight,:last,:number,:address)");
                        //Bind Values to statements
                        $stmt->bindValue(':name',$_GET['name']);
                        $stmt->bindValue(':bgroup',$_GET['bgroup']);
                        $stmt->bindValue(':gender',$_GET['gender']);
                        $stmt->bindValue(':age',$_GET['age']);
                        $stmt->bindValue(':weight',$_GET['weight']);
                        $stmt->bindValue(':last',$_GET['last']);
                        $stmt->bindValue(':number',$_GET['number']);
                        $stmt->bindValue(':address',$_GET['address']);

                        $stmt->execute();
                        echo "<h1 class='text-center'></h1>
                        ";
                    }
                    catch(Exception $e)
                    {
                        echo"<h1>".$e->getMessage()."</h1>";
                    }
                    ?>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        
    </div>
</body>
</html>