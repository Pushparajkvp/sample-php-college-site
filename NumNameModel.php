<?php
    class NumNameModel {
        function getData($num){
            require 'credentials.php';
            $conn = mysqli_connect($host,$user,$pass,$db) or die("error in connect");
            $result = mysqli_query($conn,"select distinct name from numTable where rnum = '$num';") or die(mysqli_error($conn));
            $temp = array();
            while($row =mysqli_fetch_assoc($result)){
                $temp[]=$row["name"];
            }
            return $temp;
        }
        function checkData($num){
            require 'credentials.php';
            $conn = mysqli_connect($host,$user,$pass,$db) or die("error in connect");
            $result = mysqli_query($conn,"select distinct name from numTable where rnum = '$num';") or die(mysqli_error($conn));
            $temp = array();
            if(mysqli_num_rows($result)>0){ 
                while($row =mysqli_fetch_assoc($result)){
                    $temp[]=$row["name"];
                }
            }else{
                $temp[0] = 'No Such Registration Number Is Found';
            }
     
            return $temp[0];
        }
    }