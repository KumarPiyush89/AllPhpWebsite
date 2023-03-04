
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
    <title>Alphabet</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="co-sm-12">
            <ul class="nav navbar navbar-light justify-content-center bg-secondary">
    <li class="nav-item active">
        <a class="navbar-brand" href="index.php"/>Home</a>
    </li>
    <li class="nav-item">
        <a class="navbar-brand" href="index.php"/>Add Meaning</a>
    </li>
    <li class="nav-item">
        <a class="navbar-brand" href="view.php">Veiw Meaning</a>
    </li>
</ul>        </div>
    </div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-4 bg-light"><br/><br/><br/><br/><br/><br/><br/><br/></div>
                <div class="col-sm-4"><hr/>
                    <div class="row">
                        <div class="col-sm-12"><br/><h2 class="text-center bg-info">MEANING</h2><hr/><br/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><label><b>Enter Word Meaning:</b></label><input type="text" name="name" class="form-control" placeholder="Enter Meaning" required/></div>
                        <div class="col-sm-6"><b>Upload Image :</b><input type="file" name="pic" required /><br/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 text-center"><br/><input type="submit" value="Upload" class="form-control bg-primary text-light"/></div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <div class="col-sm-4 bg-light"><br/><br/><br/><br/><br/><br/><br/><br/></div>
            </div>
        </form>
    </div>
</body>
</html>