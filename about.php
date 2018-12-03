<!DOCTYPE html>
<?php
if(isset($_REQUEST["num"])){
    $name = $_REQUEST["num"];
    $content = '<center><h2><b>About Push Academy</b></h2><br></center>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Address</p></center>
                        <center><ul>
                            <li><strong>Push Academy</strong><br>
                                Sai Leo Nagar, West Tambaram,<br>
                                Chennai – 600 044.<br>
                                Tamil Nadu. India.</li>
                        </ul><br></center>
                    </div>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Contact Us</p></center>
                        <center><ul>
                            <li><strong>Phone :</strong> 044 – 2251 2222 (8 Lines)<strong>(sairam number dont call).</strong></li>
                            <li><strong>Fax :</strong> 044- 2251 2229<strong>(sairam number dont call)</strong></li>
                            <li><strong>Email :</strong> pushacademy@pushacademy.edu.in</li>
                            <li><strong>Resumes :</strong> career@pushacademy.edu.in</li>
                        </ul><br>
                    </div>';
    include 'template.php';
}
?>


