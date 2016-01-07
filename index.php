<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
  <title>ACIT4850 Lab 1 - Casper Co (A00932505)</title>
</head>
<body>
  <?php
    $name = $_GET['name'];
    $powerLevel = 9000;
    switch($name){
      case 'Casper':
        $hello = 'Hello to me!';
        break;
      default:
        $hello = 'Hello '. $name;
        break;
    }
    echo $hello . '<br/>';
    echo 'His power level is over ' . $powerLevel . '!<br/>';

  ?>
</body>
</html>
