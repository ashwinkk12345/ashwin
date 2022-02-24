<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>web-calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #222; color: white;">

  <header>
     <div class="contain">

       <img src="logo.png" alt="logo" class="logo">

       <nav>
         <ul>
           <li><a href="backend.php">Home</a></li>
           <li><a href="channels.html">channels</a></li>
           <li><a href="contact.php">Contact</a></li>
         </ul>
       </nav>
     </div>
   </header>
   <center><p style='font-size: 25px;'>admin login page (higly secured login)</p></center>
   <br>
    <br>
   <form action="" method="POST">
    <center>
    <table>

    <tr>
      <td><center><p style="background-color: #222; color: white;">username : </td>
      <td><input type="text" name="username" style="background-color: #222; color: white; font-size: 18px; border:3px solid #55d6aa; width: 180px; border-radius: 25px;"></p></center></td>
    </tr>

    <tr>
      <td><center><p style="background-color: #222; color: white; font-size: 18px;">password : </td>
      <td><input type="text" name="password" style="background-color: #222; color: white; border:3px solid #55d6aa; width: 180px; font-size: 18px; border-radius: 25px;"></p></center></td>
    </tr>
    </center>

    </table>
    <center><input type="submit" name="submit" value="submit" 
    style="background-color: #222; color: white; border:3px solid #55d6aa; font-size: 18px; border-radius: 25px;">
    </center>
    
    </form>
    <br>
    <br>
    <br>
   <?php 
  
  include 'connection.php';

  if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];

    if(($user_password == $access_var_p) and ($user_name == $access_var_u)){

    $result= mysqli_query($con, "select * from ashwindb");
    ?>
    <table border = "1">
      <tr style="color: #9ff7be; font-size: 25px;">
        <td>name</td>
        <td>email</td>
        <td>comment</td>
      </tr>
    <?php
    while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $row['name']  ; ?></td>
          <td><?php echo $row['email']  ; ?></td>
          <td><?php echo $row['comment']  ; ?></td>
      <?php
 }
 ?>
  </table>
  <?php
}else{
  echo "sorry, wrong username/password try again.";
}

  }
  
  ?>

    <hr id="myline" noshade size=3px color="white">
    <center><p>@ 2022</p></center>
    <center><p>Developed By: ASHWIN K K </p></center>
  </p>
</body>
</html>


