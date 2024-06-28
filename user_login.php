<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
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
         <h2 class="text-center p-2" style="text-decoration:underline;">User LOgin</h2>
     <form class="form-group p-2"action="connect_register.php" method="post">

<label>Username : <input class="form-control" type="text" name="username" placeholder="ex-ABC" required></label>
<label>Password : <input class="form-control" type="password" name="password" id="password" placeholder="*****" required></label>

<!-- <input type="submit" class="btn btn-warning" name="submit" value="Log In"> -->
<button class="btn btn-info m-3" name="submit" value="Log In" type="submit" style="font-weight: bold; font-size:25px; color:white;"> <span class="fa fa-sign-in"></span> Log In </button>

</form>  
     </div>
 
 </div>



 
<div class="container text-center">
    <hr>
<h2>If you don't have username and password !!  plaese Signup First --> </h2> <br> <a class=" btn btn-primary" href="user_signup.php" style="font-weight: bold; font-size:25px; color:white;" ><span class="fa fa-sign-out p-2"></span>Sign up</a>

<button class="btn btn-info"><a href="index.php" class="text-light" style="font-weight: bold; font-size:25px; color:white; text-decoration:none;" ><span class="fa fa-home p-2"></span>Home</a></button>

</div>



</body>
</html>