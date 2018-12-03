<!DOCTYPE html>
<?php
if(isset($_REQUEST["num"])){
    $name = $_REQUEST["num"];
    $content = ' <center><h2><b>Current News:</b></h2><br></center>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">NSS 6 DAYS CAMP</p></center>
                        <center><strong>DATE</strong>   : 25.02.2017 to 03.03.2017<br>
                        <strong>PLACE</strong>  : Kayapakkam and villages<br>
                        <ul>
                            <li>A 7 day Special camp was conducted and various events organized during the camp to enhance the living standard of the village people.</li>
                            <li>The theme of the camp is “youth for swatch bharat”.</li>
                            <li>About 120 volunteers volunteers involved for this event.</li>
                        </ul><br>
                        <img src ="special.jpg" height="200" width="200"/>
                        <img src ="special1.jpg" height="200" width="200"/>
                        <img src ="special2.jpg" height="200" width="200"/>
                        <img src ="special3.jpg" height="200" width="200"/></center>
                    </div>
                    <div class ="contentTextClass">   
                        <center><p style="color:indigo;font-size:20px;">NSS BLOOD DONATION CAMP</p></center>
                        <center><strong>DATE</strong>   : 09.08.2016<br>
                        <strong>PLACE</strong>  : Central bank of India office<br>
                        <ul>
                            <li>About 70 volunteers voluntarily donated blood during the blood donation camp organized by Sairam Engineering College and Central Bank Of India.</li>
                        </ul><br>
                        <img src ="blood.jpg" height="200" width="200"/>
                        <img src ="blood1.jpg" height="200" width="200"/>
                        <img src ="blood2.jpg" height="200" width="200"/>
                    </div>
                    ';
    include 'template.php';
}
?>


