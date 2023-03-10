
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel = " stylesheet " href = " https://cdnjs.cloudflare.com/ajax/libs/font awesome / 5.15.1 / css / all.min.css " + 4zCK9k + qNFURSX + CKL9EIR + ZOhtIloN19GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV281a LL3196P9sdNyeRssA crossorigin = " anonymous " / >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href = " https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class="bg-zinc-900 text-white font-[poppins]">
    <div class="mt-24 flex flex-col items-center justify-center">
        <div class="profilecard relative w-96 bg-zinc-800 shadow-xl flex flex-col items-center justify-center py-16">
            <img src="images/p-letter-logo-with-wings-creative-wing-letter-p-logo-icon-design-vector.jpg" style="height:100px;width:40%;" alt="" title=""/>
            <h2 class="text-2xl font-bold">Create your Account</h2>
            <p class="text-sm text-center my-4 w-4/5">Sign up with your social media account or your email address.</p>
            <div class="flex items-center justify-center">
                <a href="#" class="flex items-center justify-center h-10 w-24 mx-2 rounded-full bg-red-500 text-sm>
                    <i class="fab fa-google mr-2"></i>
                    <p>Google</p>
                </a>
                <a href="#" class="flex items-center justify-center h-10 w-24 mx-2 rounded-full bg-blue-500 text-sm>
                    <i class="fab fa-facebook mr-2"></i>
                    <p>Facebook</p>
                </a>
                <a href="#" class="flex items-center justify-center h-10 w-24 mx-2 rounded-full bg-cyan-500 text-sm>
                    <i class="fab fa-twitter mr-2"></i>
                    <p>Twitter</p>
                </a>    
        </div>
        <div class="flex items-center my-4 w-full px-4">
            <hr class="w-[50%]"/>
            <span class="mx-4">OR</span>
            <hr class="w-[50%]"/>
        </div>
        <form action="signup.php" method="get">
        <div class="flex flex-col">
            <input type="text" placeholder="Name" class="my-2 rounded-full h-10 w-[16rem] px-4 text-black outline-none">
            <input type="text" name="username" placeholder="Email Address" class="my-2 rounded-full h-10 w-[16rem] px-4 text-black outline-none">
            <input type="password" name="pwd" placeholder="Password" class="my-2 rounded-full h-10 w-[16rem] px-4 text-black outline-none">
            <input placeholder="Conferm Password" class="my-2 rounded-full h-10 w-[16rem] px-4 text-black outline-none">
            <button type="submit" class="my-2 rounded-full h-10 w-[16rem] px-4 bg-green-500"> Sign Up</button>
            
        </div>
        </form>
        <?php

    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=kumarpiyush", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt =$conn->prepare("insert into userinfo(username,pwd) values(:username,:pwd)");
        
        //Bind Values to statements
        $stmt->bindValue(':username',$_GET['username']);
        $stmt->bindValue(':pwd',$_GET['pwd']);
        /*$stmt = $con->prepare("select * from userinfo where username=:username and pwd=:pwd");
        $stmt->bindValue(":username", $_POST['username']);
        $stmt->bindValue(":pwd", $_POST['pwd']);
        */
        $stmt->execute();

        echo"<h1 class='text-center'>sussessfully</h1>";
    }
    catch(Exception $e)
    {
        echo"<h1>".$e->getMessage()."</h1>";
    }

?>
    </div>
    
    
</body>
</html>