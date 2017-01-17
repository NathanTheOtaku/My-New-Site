<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <?php

      // if ($_POST['name'] == "Nathan") {
      //   echo "Hello GOD";
      // }
      // else {
      //   echo "Hello ";
      // }
      // echo "<p>".$_POST['name']." your Email is: ".$_POST['email']."</p>";

      //   if ($_GET['name'] == "Nathan") {
      //     echo "Hello GOD";
      //   }
      //   else {
      //     echo "Hello ";
      //   }
      //   echo "<p>".$_GET['name']." your Email is: ".$_GET['email']."</p>";
      //

        $myFile = fopen(preg_replace("/^A-Za-z0-9]/", '', $_POST['name']).".txt","w") or die("Unable to load file");
        fwrite($myFile,$_POST['email']);
        echo fread($myFile,filesize("readme.txt"));
        fclose($myFile);
        $myFile2 = fopen($_POST['name'].".txt","r") or die("Unable to load file");
        echo fread($myFile2,filesize($_POST['name'].".txt"));
        fclose($myFile2);
    ?>

  </body>
</html>
