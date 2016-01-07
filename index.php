<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
  <title>ACIT4850 Lab 1 - Casper Co (A00932505)</title>
</head>
<body>
  <?php
    $position = $_GET['board'];
    $squares = str_split($position);

    function winner($checker, $position){
      if(($position[0] == $checker) && ($position[4] == $checker) && ($position[8] == $checker)){
        $won = true;
      }
      else if(($position[2] == $checker) && ($position[4] == $checker) && ($position[6] == $checker)){
        $won = true;
      }
      else{
        for(int i=0; i<3; i++){
          if(($position[0+(3*i)] == $checker) && ($position[1+(3*i)]) && ($position[2+(3*i)])){
            $won = true;
          }
          else if(($position[0+i] == $checker) && ($position[3+i] == $checker) && ($position[6+i] == $checker)){
            $won = true;
          }
        }
      }
    }

    if(winner('x',$squares)) echo 'You win.';
    else if(winner('o',$squares)) echo "I win.";
    else echo "No winner yet.";


  ?>
</body>
</html>
