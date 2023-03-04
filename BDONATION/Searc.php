<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="heart.css"/>
    <link rel="stylesheet" href="Search.css"/>
    
    <title>SEARCH</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row">
        <div class="col-sm-12"><img src="customLogo.jpg" alt="" title="" style="height: 350px; width:100%;"/></div>
        </div>
        <div class="row text-center">
        <div class="col-sm-4 "></div>

            <div class="col-sm-4">
            <h1 class=" text-danger"><hr/>SEARCH THE DONORS</h1>
            <h1 class="">BLOOD GROUP</h1>
            </div>
            <div class="col-sm-4 ">
                <!--<div class="animate__animated animate__heartBeat animate__infinite	infinite" id="heart"></div>-->
            </div>

        </div>
        
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-center">
            <form action="" method="$_GET">
                <div class="row">
                    <div class="col-sm-4">
                    <svg xmlns="http://www.w3.org/2000/svg" id="svg5" version="1.1" viewBox="0 0 502.98 108.61">
                        <path id="heart" d="M213.35 29.43c19.41-15.19 33.68 10.86 37.73 18.82-.28-13.61 11.64-40.98 25.94-34.01 32.3 15.74-15.88 83.8-26.4 81.76-13.24-9-51.35-53.3-37.27-66.57Z" style="fill:#ff9999;stroke:#ff9999;stroke-width:1.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"/>
                        <path  pathLength="1" id="line" d="M5.32 78.13c.96-.01 5-8.5 5.54-8.54.58-.05 6.1 8.51 7.1 8.51 3.66 0 9.29.06 10.71.05 2.53-.01 4.82-72.88 4.82-72.88l4.76 97.28 3.97-24.45 20.45-.22C64 77.86 77.1 63.66 78.36 63.8c1.31.15 6.68 14.08 7.94 14.07 2.3-.03 33.32.04 35.76.02.96 0 5-8.5 5.53-8.53.59-.05 6.1 8.51 7.1 8.5 3.66 0 9.3.07 10.72.06 2.53-.02 4.81-72.89 4.81-72.89l4.77 97.28 3.97-24.44s83.34-3.33 74.69 7.67c-8.65 11-45.3-42.94-31.65-53.58 25.6-19.96 49.96 36.94 40.26 36.5-12.2-.53 1.8-62.32 23.41-51.7 32.24 15.86-17.56 84.92-26.4 81.77-5.73-2.05-.68-21.68 31.4-26.58 26.65-6.42 29.5 2.35 52.62 7.11 2.53-.02 4.82-72.89 4.82-72.89l4.76 97.28 3.97-24.44 20.45-.22c1.31-.02 14.41-14.22 15.68-14.07 1.32.15 6.7 14.08 7.95 14.07 2.29-.03 33.32.04 35.76.02.95 0 5-8.5 5.53-8.54.58-.04 6.1 8.52 7.1 8.52 3.66 0 9.3.06 10.72.05 2.53-.02 4.81-72.89 4.81-72.89l4.77 97.28 3.97-24.44 20.45-.23c1.31-.01 14.4-14.22 15.68-14.07 1.32.16 6.69 14.09 7.94 14.07" />
                    </svg>
                    </div>
                    <div class="col-sm-4">
                    <select class="form-select" name="bgroup" id="bgroup"  required>
                <option>SELECT</option>
                <option  value="A+" >A+</option>
                <option  value="A-" >A-</option>
                <option  value="B+" >B+</option>
                <option  value="B-" >B-</option>
                <option  value="AB+" >AB+</option>
                <option  value="AB-" >AB-</option>
                <option  value="O+" >O+</option>
                <option  value="O-" >O-</option>
            </select><br/>
            <button type="submit" class="btn btn-danger">Search</button>
                    </div>
                    
                    <div class="col-sm-4">
                    <svg xmlns="http://www.w3.org/2000/svg" id="svg5" version="1.1" viewBox="0 0 502.98 108.61">
                        <path id="heart" d="M213.35 29.43c19.41-15.19 33.68 10.86 37.73 18.82-.28-13.61 11.64-40.98 25.94-34.01 32.3 15.74-15.88 83.8-26.4 81.76-13.24-9-51.35-53.3-37.27-66.57Z" style="fill:#ff9999;stroke:#ff9999;stroke-width:1.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"/>
                        <path  pathLength="1" id="line" d="M5.32 78.13c.96-.01 5-8.5 5.54-8.54.58-.05 6.1 8.51 7.1 8.51 3.66 0 9.29.06 10.71.05 2.53-.01 4.82-72.88 4.82-72.88l4.76 97.28 3.97-24.45 20.45-.22C64 77.86 77.1 63.66 78.36 63.8c1.31.15 6.68 14.08 7.94 14.07 2.3-.03 33.32.04 35.76.02.96 0 5-8.5 5.53-8.53.59-.05 6.1 8.51 7.1 8.5 3.66 0 9.3.07 10.72.06 2.53-.02 4.81-72.89 4.81-72.89l4.77 97.28 3.97-24.44s83.34-3.33 74.69 7.67c-8.65 11-45.3-42.94-31.65-53.58 25.6-19.96 49.96 36.94 40.26 36.5-12.2-.53 1.8-62.32 23.41-51.7 32.24 15.86-17.56 84.92-26.4 81.77-5.73-2.05-.68-21.68 31.4-26.58 26.65-6.42 29.5 2.35 52.62 7.11 2.53-.02 4.82-72.89 4.82-72.89l4.76 97.28 3.97-24.44 20.45-.22c1.31-.02 14.41-14.22 15.68-14.07 1.32.15 6.7 14.08 7.95 14.07 2.29-.03 33.32.04 35.76.02.95 0 5-8.5 5.53-8.54.58-.04 6.1 8.52 7.1 8.52 3.66 0 9.3.06 10.72.05 2.53-.02 4.81-72.89 4.81-72.89l4.77 97.28 3.97-24.44 20.45-.23c1.31-.01 14.4-14.22 15.68-14.07 1.32.16 6.69 14.09 7.94 14.07" />
                    </svg>
                    </div>        
                </div>
            </form>
            <?php
            //create connection
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
            /*if(isset($_GET['search_by_id']))
            {
                $bgroup=$_GET['bgroup'];
                $stmt=$conn->prepare("select * from blooddonation where bgroup='$bgroup'");
                $query_run = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        echo $row('name');
                    }
                }
                else
                {
                    echo"No Data Found";
                }


                while($blooddonation=mysqli_fetch_array($qurry_run))
                {
                    echo $blooddonation.[id]
                }
            }*/
            $stmt=$conn->prepare("select * from blooddonation where bgroup=:bgroup");
            $stmt->bindValue(':bgroup',$_GET['bgroup']);
            $stmt->execute();
            $blooddonations=$stmt->fetchAll();
            
            ?>
            <table class="table table-hover table-striped text-center table-bordered"style=" height:150px; overflow:scroll; ">
            
            <?php
            
                echo"<tr style='position:relative;'><td class='bg-danger text-light'>ID</td><td class='bg-danger text-light'>NAME</td><td class='bg-danger text-light'>BLOOD GROUP</td><td class='bg-danger text-light'>AGE</td><td class='bg-danger text-light'>WEIGHT</td><td class='bg-danger text-light'>LAST DONATION</td><td class='bg-danger text-light'>NUMBER</td><td class='bg-danger text-light'>ADDRESS</td></tr>";
                
                
                foreach ($blooddonations as $blooddonation)
                
                    {
                        
                        echo
                            '<tr>
                                <td class="bg-light ">'.$blooddonation['ID']."</td>
                                <td class='bg-light '>".$blooddonation['name']."</td>
                                <td class='bg-light '>".$blooddonation['bgroup']."</td>
                                <td class='bg-light '>".$blooddonation['age']."</td>
                                <td class='bg-light '>".$blooddonation['weight']."</td>
                                <td class='bg-light '>".$blooddonation['last']."</td>
                                <td class='bg-light '>".$blooddonation['number']."</td>
                                <td class='bg-light '>".$blooddonation['address']."</td>
                            </tr>";
                        
                    }

                
            ?>

            </table>
            </div>

            <div class="col-sm-1"></div>
        </div>
    </div>
</body>
</html>