<html>
    <head>
        <meta charset ="UTF-8"/>
        <title>Login Screen</title>
        <link rel="stylesheet" type="text/css" href="logincss.css">
    </head>
    <body class = "bodyClass">
        <div class ="wrapperClass">
            <header class = "headerClass">
                <center><h1>Welcome To Push Academy</h1></center>
            </header>

            <article class ="articleClass">  
                <center><form action ="" method ="POST" class="formClass">
                    <p><?php
                    if(isset($_POST["RegistrationNumber"])){
                        require 'NumNameModel.php';
                        $NumNameModel = new NumNameModel();
                        $content= $NumNameModel->checkData($_POST["RegistrationNumber"]);
                        if($content != 'No Such Registration Number Is Found'){
                            header("Location: mainPage.php?num=".$content);
                            die();
                        }else{
                            echo $content;
                        }
                    }else{
                        echo 'Enter The Anna University Registration Number';
                    }
                    ?></p><br>
                    <input class="textClass" type="text" name="RegistrationNumber"><br>
                    <input class="buttonClass" type="submit">
                </form></center>
            </article>
            <footer class="footerClass">
                <h1>&copy;This Page Is Copyrighted To Pushparaj.K.V<h1>
            </footer>
        </div>
    </body>
</html>