
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

    <title>File Upload</title>
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
</ul>            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 bg-light"></div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12 text-center"><h3 class="text-primary"><u>ALL MEANINGS</u></h3><hr/></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                                                <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary"><th>ID</th><th>MEANINGS</th><th>PICTURES</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td><td>Apple</td><td><img src="./Picture/1.jpg" height="100px" width="100px" border="2px"/></td></tr><tr><td>2</td><td>Banana</td><td><img src="./Picture/2.jpg" height="100px" width="100px" border="2px"/></td></tr><tr><td>3</td><td>Coconut</td><td><img src="./Picture/3.jpg" height="100px" width="100px" border="2px"/></td></tr><tr><td>4</td><td>Dragon</td><td><img src="./Picture/4.jpg" height="100px" width="100px" border="2px"/></td></tr>                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><a href="index.php"/><button class="btn form-control bg-info text-light">Add Another</button></a></div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <div class="col-sm-4 bg-light"></div>
        </div>
    </div>

</body>
</html>