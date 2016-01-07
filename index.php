<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
  <title>ACIT4850 Lab 1 - Casper Co (A00932505)</title>
</head>
<body>
  <?php
    if(isset($_GET['board'])){
      $position = $_GET['board'];
      $squares = str_split($position);
    }
    else{
      echo "No board";
    }

    if(winner('x',$squares)) echo 'You win.';
    else if(winner('o',$squares)) echo "I win.";
    else echo "No winner yet.";

  ?>
</body>
</html>
<?php
  function winner($checker, $position){
    $won = false;

    if(($position[0] == $checker) && ($position[4] == $checker) && ($position[8] == $checker)){
      $won = true;
    }
    else if(($position[2] == $checker) && ($position[4] == $checker) && ($position[6] == $checker)){
      $won = true;
    }
    else{
      for($row=0; $row<3; $row++){
        $result = true;
        for($col=0; $col<3; $col++){
          if($position[3*$row+$col] != $checker){
            $result = false;
          }
        }
        if($result){
          $won = true;
        }
      }
      for($col=0; $col<3; $col++){
        if(($position[0+$col] == $checker) && ($position[3+$col] == $checker) && ($position[6+$col] == $checker)){
          $won = true;
        }
      }
    }
    return $won;
  }
?>
