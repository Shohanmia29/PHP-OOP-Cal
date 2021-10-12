<?php
        require_once 'functional.php';

        if(isset($_POST['btn'])){
            $numOne=$_POST['fnumber'];
            $numTwo=$_POST['snumber'];
            $cal=new calculation();
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
             width:100%;
        }
        .main-body{
              width:30rem;
              background-color:green;
              position: absolute;
              text-align:center;
              top:40%;
              left:30%;
              color:white;
              padding: 2px;
              border-radius:4px;
        }
        .table{
            display: flex;
            justify-content:center;
        }
    </style>
</head>
<body>
    <div class="container">
           <div class="main-body">
               <h4 >Calculation</h4>
          <form action="" method="post">
              <h6><?php  if(isset($numOne,$numTwo)){echo $numOne." To ".$numTwo;} ?></h6>
              <input type="number" name="fnumber" placeholder="Enter your First Number" required><br>
              <input type="number" name="snumber" placeholder="Enter your Second Number" required><br/>
              <input type="submit" name="btn" value="submit">
          </form>
           </div>
           <table class="table">
               <tr>
                   <td><?php if(isset($cal)){echo $cal->sumation($numOne,$numTwo);;}?></td>
               </tr>
               <tr>
                   <td><?php if(isset($cal)){echo $cal->subtraction($numOne,$numTwo);}?></td>
               </tr>
               <tr>
                   <td><?php if(isset($cal)){echo $cal->divide($numOne,$numTwo);}?></td>
               </tr>
               <tr>
                   <td><?php if(isset($cal)){echo $cal->modulus($numOne,$numTwo);}?></td>
               </tr>
           </table>
    </div>
</body>
</html>