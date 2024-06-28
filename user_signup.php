<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <style>

label{
  font-weight: bold;
  font-size: 18px;
  
}


    </style>
    <title>Regester From</title>
</head>
<body>

<div class="container pt-4">
<div class="col d-flex justify-content-center">

    <div class="card p-4">
      <h2 class="text-center" style="text-decoration:underline;">User Signup Form</h2>
      <hr>
      
  <form action="insertdata.php" method="post">
<div class="form-group">
<label for="username">Username : </label><input class="form-control" type="text" name="username" id="username" minlength="3" required>
<label for="password" >Password :</label> <input class="form-control" type="password" name="password" id="password" minlength="3" required>
<input type="checkbox" onclick="myFunction()" class="p-2"> Show password
</div>
<div class="form-group">
<label for="gender">Gender : </label> <input type="radio" name="gender" id="gender" value="male" required>Male
<input type="radio" name="gender" id="gender" value="female" required>Female
    <br>
<label for="email">Email : </label > <input class="form-control" type="email" name="email" id="email" required="@gmail.com">
<label for="nickname">Nick-name: <input class="form-control" type="text" name="phonecode" id="nickname" required>
<label for="phone">Mobile : </label><input class="form-control" type="phone" name="phone" id="phone" maxlength="10" pattern="[0-9]{10}" required>

<br>
    
<button class="btn btn-info form-control" type="submit" value="submit">Submit</button>

  </form>  
</div>
</div>
  </div>
  </div>

    

<center> 
  
<button class="btn btn-warning p-2 mt-2"><a href="index.php" class="text-light"style="text-decoration:none; padding:2px; margin:2px; font-weight: bold; font-size:25px; color:white;" > <span class="fa fa-sign-in"></span> Home</a></button>


</center>

<script>

function myFunction(){
  var x = document.getElementById("password");
  if(x.type === "password"){
    x.type="text";
  }
  else{
    x.type="password";
  }
}

</script>
</body>
</html>