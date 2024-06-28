

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Log-in form</title>
<style>


form{

    padding-top:120px ;
    text-align: center;
    font-size: 30px;
}
input{
    width: 250px;
    height: 40px;
    font-size: 30px;
}

</style>

</head>
<body>
   
 <div class="container pt-4">
     <div class="card p-4">
     <button class="btn btn-info m-3 "><a href="index.php" class="text-light"style="text-decoration:none; font-size:20px; padding: 2px;" ><span class="fa fa-home fa-2x mr-2"></span>Home</a></button>
         <h2 class="text-center">Admin LOgin </h2>
<marquee behavior="" direction="left">Administration Login only !!</marquee>

     <form class="form-group p-2"action="admin_validate.php" method="post">

<label>User id : <input class="form-control" type="text" name="username" required placeholder="admin" ></label>
<label>Password : <input class="form-control" type="password" name="password" required placeholder="admin" ></label>

<!-- <span class="fa fa-sign-in"></span><input type="submit" class="btn btn-warning" name="submit" value="Log In"> -->
<button class="btn btn-info m-3" name="submit" value="Log In" type="submit" style="font-weight: bold; font-size:25px; color:white;"> <span class="fa fa-sign-in"></span> Log In </button>

</form>  
     </div>
     
 </div>
 

</body>
</html>