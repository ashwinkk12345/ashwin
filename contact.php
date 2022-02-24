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
  <br>
  <br>

  <form action="" method="POST">
    <center>
    <table>

    <tr>
      <td><center><p style="background-color: #222; color: white;">Name : </td>
      <td><input type="text" name="names" style="background-color: #222; color: white; font-size: 18px; border:3px solid #55d6aa; width: 180px; border-radius: 25px;"></p></center></td>
    </tr>

    <tr>
      <td><center><p style="background-color: #222; color: white; font-size: 18px;">E-mail : </td>
      <td><input type="text" name="emails" style="background-color: #222; color: white; border:3px solid #55d6aa; width: 180px; font-size: 18px; border-radius: 25px;"></p></center></td>
    </tr>

    <tr>
      <td><center><p style="background-color: #222; color: white; font-size: 18px;">Comment : </td>
      <td><input type="text" name="comments" 
    style="background-color: #222; color: white; border:3px solid #55d6aa;height: 120px; font-size: 18px; width: 180px; border-radius: 20px;"></p></center></td>
    </tr>
    </center>

    </table>
    <center><input type="submit" name="submit" value="submit" 
    style="background-color: #222; color: white; border:3px solid #55d6aa; font-size: 18px; border-radius: 25px;">
    </center>
    
    </form>
    <center><p style="font-family: cursive; color: white; font-size: 30px">OR</p></center>
    <center><p style="font-family: cursive; color: #3ee1ee; font-size: 25px">contact me on --> 00ashwinkk00@gmail.com</p></center>
    
    <hr id="myline" noshade size=3px color="white">
    <center><p>@ 2022</p></center>
    <center><p>Developed By: ASHWIN K K </p></center>
    <p style="font-size: 10px; text-align: right; font-family: cursive; text-decoration: none;"><a href="admin.php">admin</a></p>
  </p>

  <?php 
  
  include 'connection.php';

  if(isset($_POST['submit'])){
    $name = $_POST['names'];
    $email = $_POST['emails'];
    $comment = $_POST['comments'];

    $insertquery = "insert into ashwindb( name, email, comment)
     values('$name', '$email', '$comment')";

    $user_entry = mysqli_query($con, $insertquery);

    if($user_entry){
      ?>
      <script>
        alert("your enrtry has been submitted suuccessfully.")
      </script>
      <?php
    }else{
      ?>
      <script>
        alert("sorry, an error occured while submitting the entry.")
      </script>
      <?php
    }
  }

  ?>

</body>
</html>


