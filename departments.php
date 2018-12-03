<!DOCTYPE html>
<?php
if(isset($_REQUEST["num"])){
    $name = $_REQUEST["num"];
    $content = ' <center><h2><b>Department Details</b></h2><br></center>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Computer Science Engineering (CSE)</p></center>
                        <center><ul>
                            <li>Computer science engineering (CSE) is one of the popular courses among engineering aspirants which focuses on the basic elements of computer programming and networking. Students pursuing computer science courses will gain knowledge of design, implementation and management of information system of both hardware and software.</li>
                            <li>Going by the name, CSE course deals primarily with the theory of computation and design of computational systems. The course is offered across the globe in technical institutions at undergraduate as well as postgraduate levels awarding B.Tech and M.tech degrees, respectively..</li>
                        </ul><br>
                        <img src ="social.jpg" height="100" width="120">
                        <img src ="social1.png" height="100" width="120"/>
                        <img src ="social2.jpg" height="100" width="120"/>
                        <img src ="social4.png" height="100" width="300"/></center>
                    </div>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Mechanical (MECH)</p></center>
                        <center><ul>
                            <li>Mechanical engineering is a professional programme which helps students to understand the working mechanisms of heavy tools and machineries</li>
                            <li>The branch applies principles of engineering, physics and material science for the design, analysis, manufacturing and maintenance of mechanical systems</li>
                        </ul><br>
                        <img src ="mech.jpg" height="150" width="150">
                        <img src ="mech1.jpg" height="150" width="150"/>
                        <img src ="mech2.gif" height="150" width="150"/>
                        <img src ="mech3.jpg" height="150" width="150"/></center>
                    </div>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Information Technology (IT)</p></center>
                        <center><ul>
                            <li>A student holding a degree in Information Technology can work as an IT Engineer responsible for operating computer systems, software, servers, computer networking or network securities. The programme focuses on the theoretical and technical aspects of designing, developing, researching and testing software as well as digital hardware</li>
                            <li>Information Technology is designed to teach students about various fundamental concepts of information security, web systems, computer networking and software engineering. The programme covers subjects like programming, mathematics, and operations among others.</li>
                        </ul><br>
                        <img src ="it.jpg" height="150" width="150">
                        <img src ="it1.jpg" height="150" width="150"/>
                        <img src ="it2.jpeg" height="150" width="150"/>
                        <img src ="it3.png" height="150" width="150"/></center>
                    </div>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;"> Electronics & Communication Engineering (ECE)</p></center>
                        <center><ul>
                            <li>ECE is an initialism with disparate meanings, including: Electrical and computer engineering, a discipline that combines electrical engineering and computer science and engineering</li>
                            <li>ECE Engineers also creates advanced communication facilities like video conferencing which bring people together from all over the world</li>
                        </ul><br>
                        <img src ="ece.jpg" height="150" width="150">
                        <img src ="ece1.jpg" height="150" width="150"/>
                        <img src ="ece2.jpg" height="150" width="150"/>
                        <img src ="ece3.jpg" height="150" width="150"/></center>
                    </div>
                    <div class ="contentTextClass">       
                        <center><p style="color:indigo;font-size:20px;">Civil Engineering (CIVIL)</p></center>
                        <center><ul>
                            <li>Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings.</li>
                            <li>TIn 1818 the Institution of Civil Engineers was founded in London, and in 1820 the eminent engineer Thomas Telford became its first president</li>
                        </ul><br>
                        <img src ="civil.jpg" height="150" width="150">
                        <img src ="civil1.jpg" height="150" width="150"/>
                        <img src ="civil2.gif" height="150" width="150"/>
                        <img src ="civil3.jpg" height="150" width="150"/></center>
                    </div>';
    include 'template.php';
    
}
?>


