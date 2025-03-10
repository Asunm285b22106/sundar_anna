<?php
if(isset($_GET["submit"])){
    // echo "submitted successfully";

$servername="localhost";
$username  ="root";
$password  ="";
$db        ="session";

$conn=mysqli_connect($servername,$username,$password,$db);
}

if($conn){
    // echo"connected successfully";



$fn=$_GET["firstname"];
$ln=$_GET["lastname"];
$sql = mysqli_query($conn,"INSERT INTO tbl_user (firstname,lastname) values ('$fn','$ln')");

if($sql){
    echo"ADMIN:".$fn.$ln;
}

if(isset($_GET["park"])){

    $cn=$_GET["carno"];
    $cm=$_GET["carmodel"];
    $cc=$_GET["carcolor"];
    $co=$_GET["carowner"];

    $sql=mysqli_query($conn,"INSERT INTO tbl_cust values ('$cn','$cm','$cc','$co')");

    if($sql){
        echo"inserted successfully";
    }
}
}
?>
<html>
    <head>
    <link rel="stylesheet"  href="login.css">
    </head>
        <body>
            <form method="GET" action="">
            <center><div class="log"><h1>CAR  PARKING  MANAGEMENT</h1></div></center><br><br>
            <center>
                <div>
                    <tr>
                    <td><label for=""><h3>CAR NO   </label></td>
                    <td><input type="text" class="input1" name="carno"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="">CAR MODEL</label></td>
                    <td><input type="text" class="input" name="carmodel"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="" >CAR COLOR</label></td>
                    <td><input type="text" class="input" name="carcolor"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="">CAR OWNER</label></td>
                    <td><input type="text" class="input" name="carowner"><br><br></td>
                    </tr></h3>

                    <tr>
                    <td><input type="submit" name="park" value="PARK THE CAR" class="sub"></td>
                    <td><input type="submit" name="vacate" value="VACATE THE CAR" class="sub"></td>
                    </tr>

                <div>
                    <br><h1 class="log">STATUS</h1>
                </div>

                </div>
                <br><br>
                <div>
                    <h3 class="cn">CAR NO</h3>
                    <h3 class="cm">CAR MODEL</h3>
                    <h3 class="cc">CAR COLOR</h3>
                    <h3 class="co">CAR OWNER</h3>
                </div>
            </center>
            </form>
        </body>
    
</html>