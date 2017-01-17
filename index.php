<!DOCTYPE HTML>
<html>

<head>
    <title>Nathan Goes Poke'mon!</title>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>

<body>
    <?php
      // $helloText = "Hello Console";
      // echo "Hello World! ".$helloText;
      // var_dump($helloText);

    ?>
    <div class="container">
      <?php include("nav.php"); ?>
            <div class="horz-center content-border">
          <div class="container content">
            <h2>It really has begun!!</h2>
            <p>Hello friends,</p>
            <p>I've spent a lot of time wondering what this website should be. Well after much diliberation, I still have no idea. -That being said, untill this website is properly formated and orginized, it will basically be the ramblings of a mad man.</br></br>With that in mind, I hope you enjoy it. Hoby ho lets go!</p>
            <iframe class="vid1" src="https://www.youtube.com/embed/oqVnm16pK_8"></iframe>
            <?php //echo readfile("readme.txt");
            // $myFile = fopen("readme.txt","w") or die("Unable to load file");
            // echo fread($myFile,filesize("readme.txt"));
            // fclose($myFile);
             ?>
            <!-- <img style='padding: 10px;' align=left src='http://placehold.it/300x300'> -->
            <p>Cras tempus eros mauris, quis porta purus venenatis nec. Sed maximus eu felis at facilisis. Aliquam erat volutpat. Praesent congue nisl elit, at rutrum metus vestibulum at. Quisque quam arcu, mollis vel neque vel, interdum eleifend neque. Vestibulum pellentesque, tortor in rhoncus tristique, libero diam facilisis nisl, ac malesuada nulla magna in eros. Pellentesque rhoncus ut felis a condimentum. Nullam ultricies dapibus odio placerat consectetur. Nam semper ultrices lacus eget eleifend. Vestibulum in dignissim nisl. Aliquam venenatis lorem at lectus eleifend convallis. Etiam mollis nunc a ante dignissim, a consequat metus vulputate. Curabitur laoreet massa mauris, eu gravida elit hendrerit quis. Nullam leo magna, vestibulum eu mollis eget, porttitor vitae enim. Cras rhoncus risus et aliquam eleifend. Sed sit amet neque libero.</p>
            <p>Suspendisse quis tellus congue, bibendum dolor eu, dignissim mauris. Nulla ex dolor, commodo feugiat consectetur sed, congue quis quam. Maecenas ullamcorper ut turpis condimentum tristique. Integer non tincidunt sem, vitae molestie velit. Ut quis semper orci. Aliquam sodales ante non lorem malesuada, ut vestibulum enim facilisis. Ut neque metus, feugiat sit amet mattis nec, dapibus ut dui. Morbi ultrices est nec vehicula facilisis. Suspendisse posuere risus nulla. Donec feugiat dolor dui, eu consectetur sem placerat non. Mauris cursus diam massa, at commodo nunc malesuada nec.</p>
              <p>Cras tempus eros mauris, quis porta purus venenatis nec. Sed maximus eu felis at facilisis. Aliquam erat volutpat. Praesent congue nisl elit, at rutrum metus vestibulum at. Quisque quam arcu, mollis vel neque vel, interdum eleifend neque. Vestibulum pellentesque, tortor in rhoncus tristique, libero diam facilisis nisl, ac malesuada nulla magna in eros. Pellentesque rhoncus ut felis a condimentum. Nullam ultricies dapibus odio placerat consectetur. Nam semper ultrices lacus eget eleifend. Vestibulum in dignissim nisl. Aliquam venenatis lorem at lectus eleifend convallis. Etiam mollis nunc a ante dignissim, a consequat metus vulputate. Curabitur laoreet massa mauris, eu gravida elit hendrerit quis. Nullam leo magna, vestibulum eu mollis eget, porttitor vitae enim. Cras rhoncus risus et aliquam eleifend. Sed sit amet neque libero.</p>
            <p>Pellentesque pulvinar iaculis nulla non ullamcorper. Curabitur vel cursus eros, in volutpat dolor. Nullam semper lectus vulputate, imperdiet neque eget, dapibus risus. Integer nulla est, scelerisque nec aliquam sit amet, ornare ac leo. Pellentesque vel lacus eu neque mollis tincidunt et nec ipsum. Ut mi sapien, hendrerit non est nec, elementum fringilla quam. In efficitur orci quis tellus volutpat lobortis. In lobortis faucibus velit, pulvinar vehicula risus tincidunt rhoncus. Suspendisse quis vehicula enim. Nulla facilisi.</p>
            <div class="hero"></div>
            <p>Suspendisse quis tellus congue, bibendum dolor eu, dignissim mauris. Nulla ex dolor, commodo feugiat consectetur sed, congue quis quam. Maecenas ullamcorper ut turpis condimentum tristique. Integer non tincidunt sem, vitae molestie velit. Ut quis semper orci. Aliquam sodales ante non lorem malesuada, ut vestibulum enim facilisis. Ut neque metus, feugiat sit amet mattis nec, dapibus ut dui. Morbi ultrices est nec vehicula facilisis. Suspendisse posuere risus nulla. Donec feugiat dolor dui, eu consectetur sem placerat non. Mauris cursus diam massa, at commodo nunc malesuada nec.</p>
            <p>Pellentesque pulvinar iaculis nulla non ullamcorper. Curabitur vel cursus eros, in volutpat dolor. Nullam semper lectus vulputate, imperdiet neque eget, dapibus risus. Integer nulla est, scelerisque nec aliquam sit amet, ornare ac leo. Pellentesque vel lacus eu neque mollis tincidunt et nec ipsum. Ut mi sapien, hendrerit non est nec, elementum fringilla quam. In efficitur orci quis tellus volutpat lobortis. In lobortis faucibus velit, pulvinar vehicula risus tincidunt rhoncus. Suspendisse quis vehicula enim. Nulla facilisi.</p>
            <form action="welcome.php" method="post">
              Name: <input required type='text' name="name"><br/>
              Email: <input type='text' name="email"><br/>
              <input type="submit">
            </form>

          </div>
          </div>
          <footer class="footer">
            <div class="column"></br></br>This page is owned and operated by GreeffWorks.</div>
            <div class="column"><p></br>Hello World</br>This is my Footer</p></div>
            <div class="column">
              <input type="button" value="Secret"  onclick="playMusic()">
              <audio id="secret" src="_docs/secret.mp3" ></audio>
              <p>Test</p>
            </div>
          </footer>
        </div>
    <script src="_js/jquery-3.1.1.js"></script>
    <script src="_js/myscript.js"></script>
</body>


</html>
