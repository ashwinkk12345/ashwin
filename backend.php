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

  <center><p style="font-family: cursive; font-weight: bold; font-size: 45px;">Web-Calculator</p></center>
  <form action="" method="GET">
    <center><p>first number  </p><input type="text" 
    name="first" 
    style="width: 280px; font-size: 20px; background-color: #222; color: white;border:3px solid #55d6aa; border-radius: 25px;">
    <br>
    </center>
    <center><p>second number </p><input type="text" name="second" 
    style="width: 280px; font-size: 20px; background-color: #222; color: white;border:3px solid #55d6aa; border-radius: 25px;">
    <br>
    </center>
    <center><p>operator</p>
    <select name="operator" id="" style="color: white; background-color: #222;border:3px solid #55d6aa; font-size: 20px; border-radius: 25px;">
      <option value="+" style="font-size: 20px;">+ for adding</option>
      <option value="-" style="font-size: 20px;">- for subtracting</option>
      <option value="*" style="font-size: 20px;">* for multiplying</option>
      <option value="/" style="font-size: 20px;">/ for dividing</option>
      <option value="%" style="font-size: 20px;">% for remainder</option>
      <option value="//" style="font-size: 20px;">// for integer value of division</option>
    </select>
    </center>
    <br>
    <center><input type="submit" name="calculate" value="calculate" 
    style="background-color: #222; color: white; border:3px solid #55d6aa; border-radius: 25px; font-size: 20px;">
    </center>
    <br>
    <br>
  </form>
  <p> 
    <?php
      //this line checks whether submit button is clicked
      if(isset($_GET['calculate'])){   
        $first = $_GET['first'];
        $second = $_GET['second'];
        $operator = $_GET['operator'];
        if($operator == "+"){
          $answer = $first + $second;
          echo "<center><p style='font-size: 30px;'>$first + $second = $answer</p></center>";
        }elseif($operator == "-"){
          $answer = $first - $second;
          echo "<center><p style='font-size: 30px;'>$first - $second = $answer</p></center>";
        }elseif($operator == "*"){
          $answer = $first * $second;
          echo "<center><p style='font-size: 30px;'>$first * $second = $answer</p></center>";
        }elseif($operator == "/"){
          $answer = $first / $second;
          echo "<center><p style='font-size: 30px;'>$first / $second = $answer</p></center>";
        }elseif($operator == "//"){
          $answer = intdiv($first, $second);
          echo "<center><p style='font-size: 30px;'>$first // $second = $answer</p></center>";
        }elseif($operator == "%"){
          if($first < $second){
            echo "<center><p style='font-size: 30px;'>sorry, first number is greater than second one.<br>
             Try again by swaping the number.</p></center>";
          }else{
          $answer = $first % $second;
          echo "<center><p style='font-size: 30px;'>$first % $second = $answer</p></center>";
          }
        } 
      }
    ?>
    <br>
    <hr id="myline" noshade size=3px color="white">
    <center><p>@ 2022</p></center>
    <center><p>Developed By: ASHWIN K K </p></center>
  </p>
</body>
</html>


