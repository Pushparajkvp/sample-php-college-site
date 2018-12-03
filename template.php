<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8"/>
      <link rel="stylesheet" type="text/css" href="mainpagecss.css">
        <title>Main Page</title>
    </head>
    <body class="classBody">
        <div class="wrapper">

                <header class="headerClass">
                    <img src ="logo.png"/>
                </header>

                <nav class="navClass">
                    <center><ul>
                        <li><a href =<?php echo 'mainPage.php?num='.urlencode($name)?>>Home</a></li>
                        <li><a href =<?php echo 'departments.php?num='.urlencode($name)?>>Departments</a></li>
                        <li><a href =<?php echo 'photos.php?num='.urlencode($name)?>>Photo Gallery</a></li>
                        <li><a href =<?php echo 'about.php?num='.urlencode($name)?>>About</a></li>
                        </ul></center>
                </nav>
                <article class="articleClass">
                    <center><h1><?php echo 'Welcome '.htmlspecialchars($name).'!'?></h1></center>
                    <?php echo $content?>
                </article> 
                <footer class="footerClass">
                    <h1>&copy;Copyrighted to Pushparaj.K.V</h1>
                </footer>  
            </div>
    </body>
</html>