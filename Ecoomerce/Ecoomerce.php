<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="stylesheet" href="style.css"/>
    <title>Ecoomerce</title>
</head>
<body>
    <div class="container-fluid">
    <form action="Ecoomerce1.php" method="get">
        <div class="row">
            <div class="col-sm-12"><?php include'Navigation.php'; ?></div>
        </div><br/><br/><br/>
        <div class="row">
            <div class="col-sm-1 "></div>
            <div class="col-sm-10 shadow-lg p-3 mb-5 bg-body rounded">
            <div class="section">
                <div class="img-slider">
                    <img src="download (12).jpeg" alt="" title=""  class="img" />
                    <img src="images (39).jpeg" alt="" title="" class="img" />
                    <img src="images (68).jpeg" alt="" title="" class="img" />
                    <img src="images (78).jpeg" alt="" title="" class="img" />
                    <img src="images (90).jpeg" alt="" title="" class="img" />
                    <!--<img src="9bb37c1a8c5315711283a61bb184fc64.jpg" alt="" title="" class="img"/>-->
                    <img src="images (68).jpeg" alt="" title="" class="img" />


                </div>
            </div>    
            <!--<img src="nikon-camera-photographer-taking-photo-female.jpg" alt="" title=""  style="height: 100%; width:100%;"/>-->
            </div>
            <div class="col-sm-1"></div>
        </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 bg-light"></div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6"><img src="download.jpeg" alt="" title="" style="height: 100%; width:100%;"/></div>
                    <div class="col-sm-6">
                    <label>Name </label><br/>
                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control"/><br/>
                    <label>Contact</label>
                    <input type="number" name="contact" placeholder="01234567789" class="form-control"/><br/>
                    <label>Email</label><br/>
                    <input type="email" name="email" placeholder="google@gmail.com" class="form-control"/><br/>
                    <label>Password</label>
                    <input type="password" name="ps" placeholder="xxxxxxxxxx" class="form-control"/>
                    <label>Conform Password</label>
                    <input type="password" name="rps" placeholder="xxxxxxxxxx" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-end"><br/><input type="reset"></div>
                    <div class="col-sm-6"><br/><input type="submit"></div>
                </div>
                
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 bg-info"><br/>Hello piyush</div>
        </div>
        </form>
    </div>
</body>
</html>