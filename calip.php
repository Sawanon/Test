<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="calip.php" method="post">
      <input type="text" name="octave[]" value="" maxlength="8">
      <input type="text" name="octave[]" value="" maxlength="8">
      <input type="text" name="octave[]" value="" maxlength="8">
      <input type="text" name="octave[]" value="" maxlength="8">
      <input type="submit" name="" value="Cal">
      <?php
      echo "<br>";
      echo $_POST['octave'][0];
      echo "<br>";
      echo $_POST['octave'][1];
      echo "<br>";
      echo $_POST['octave'][2];
      echo "<br>";
      echo $_POST['octave'][3];
      echo "<br>";
      //echo substr($_POST['octave'][0],7,1);
      $subnet[] =0;
      $bit = [128,64,32,16,8,4,2,1];
      print_r($bit);
      $last = 1;
      for ($i=0; $i < 4; $i++) {
        for ($j=0; $j < 8; $j++) {
          if(substr($_POST['octave'][$i],$j,1)==1){
            $subnet[$i] += $bit[$j];
          }else{
            $subnet[$i] += 0;
          }
        }
      }
      echo "<br>";
      echo $subnet[0].".".$subnet[1].".".$subnet[2].".".$subnet[3];
       ?>
    </form>
  </body>
</html>
