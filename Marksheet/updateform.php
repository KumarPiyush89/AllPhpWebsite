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
    <link rel="stylesheet" href="updateform.css"/>
    <title>UPDATE FORM</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include 'Navigation.php'?></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 bg-light">
                <?php
                try
                {
                        $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        $stmt=$conn->prepare("select * from marksheet where id=:id");
                        $stmt->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
                        $stmt->execute();
                        $rec=$stmt->fetch();
                        if(empty($rec))
                        {
                            //echo'<h1 class="text-center text-danger animate__animated animate__backInDown" style="margin-top:50%;">Invalid Id</h1>';
                            echo'<div class="row"><div class="col-sm-12"><h1 class="animate__animated animate__zoomOutDown animate__repeat-1 animate__delay-2s text-center text-light bg-danger" style="margin-top:60%;">INVALID ID INVALID ID  INVALID </h1></div></div>';
                        }
                        else
                        {
                            ?>
                            <form action="updaterecord.php" method="get">
                                
                                    
                                <div class="row">
                                    <div class="col-sm-4 bg-light"></div>
                                    <div class="col-sm-8"><br/><br/><label>ID</label>
                                <div class="input-field">
                                    <input type="number" name="id" class="form-control" value="<?=$rec['id']?>" required/><br/>
                                </div>        
                                <div class="input-field">
                                    <input type="text" placeholder="Name" name="name" class="form-control" value="<?=$rec['name']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Father's Name" class="form-control" name="fname" value="<?=$rec['fname']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Mother's Name" class="form-control" name="mname" value="<?=$rec['mname']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Class" name="class" class="form-control" value="<?=$rec['class']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Roll" name="roll" class="form-control" value="<?=$rec['roll']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Hindi" name="hin" class="form-control" value="<?=$rec['hin']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Math" name="mat" class="form-control" value="<?=$rec['mat']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Science" name="sci" class="form-control" value="<?=$rec['sci']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Social Science" name="sst" class="form-control" value="<?=$rec['sst']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="English" name="eng" class="form-control" value="<?=$rec['eng']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Urdu" name="urd" class="form-control" value="<?=$rec['urd']?>" required/><br/>
                                </div>   
                                <div class="input-field">
                                    <table>
                                        <tr>
                                            <td><input type="reset" class="btn btn-primary"/></td>
                                            <td><input type="submit" class="btn btn-primary" value="Update"/></td>
                                        </tr>
                                    </table>
                                    <!--<input type="reset" class="btn btn-primary"/><input type="submit" class="btn btn-primary" value="Update"/>-->
                                </div>
                                </div>
                                    
                    
                            </form>
                            <?php
                        }
                }
                catch(Exception $e) 
                {

                }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>