

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;    
}  
.container {  
    padding: 50px;   
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: red;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>

  <body>
  
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['psw'];



// Submit to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
  die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{

  $sql = "INSERT INTO `form` (`First Name`, `Middle Name`, `Last Name`, `Gender`, `Phone`, `Address`, `Email`, `Password`) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$phone', '$address', '$email', '$password');";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your application has been submitted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  else{
    echo "The record was not inserted because of this error --->" . mysqli_error($conn);
  }
}
}
?>

    <div class ="container mt-3">
    <form action = "/project/index.php/21_Get_Post.php" method="post">
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> First Name </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
<label> Middle name: </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required />   
<label> Last name: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />   
<div>  
<label for ="course">   
Course :  
</label>   
  
<select name="course">  
<option value="Course">Course</option>  
<option value="BCA" >BCA</option>  
<option value="BBA" >BBA</option>  
<option value="B.Tech" >B.Tech</option>  
<option value="MBA" >MBA</option>  
<option value="MCA" >MCA</option>  
<option value="M.Tech" >M.Tech</option>  
</select>  

</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>    
<input type="text" name="phone" placeholder="phone no." size="10"/ required> 
<label>  
Current Address :  
</label>
<textarea cols="80" name="address" rows="5" placeholder="Current Address" value="address" required>  
</textarea>  

 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
    <button type="submit" class="registerbtn">Register</button>    
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 
</body>
</html>
