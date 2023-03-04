<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>First Page</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include "Navigation.php";?>
            </div>
        </div>
        <form action="SecondPage.php" method="get">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><br/><br/><br/>
                <input type="text" name="name" placeholder="Name" class="form-control"/><br/>
                <input type="text" name="fname" placeholder="Father's Name"class="form-control"/><br/>
                <input type="text" name="mname" placeholder="Mother's Name"class="form-control"/><br/>
                <input type="reset" /><br/><br/><input type="submit"/>
            </div>
            <div class="col-sm-4"></div>
            </form>
        </div>
    </div>
</body>
</html>