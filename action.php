<?php
if(isset($_GET["submit"])){
    // echo "submitted successfully";

$servername="localhost";
$username  ="root";
$password  ="";
$db        ="session";

$conn=mysqli_connect($servername,$username,$password,$db);
}

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

// echo"connected successfully";
$fn=$_GET["firstname"];
$ln=$_GET["lastname"];
$sql = mysqli_query($conn,"INSERT INTO tbl_user (firstname,lastname) values ('$fn','$ln')");

if($sql){
    echo"ADMIN:".$fn.$ln;
}

// if("park"){

//     $cn=
//     $sql=mysqli_query($conn,"insert INTO tbl_cust values ()")
// }

?>
<html>
    <head>
    <link rel="stylesheet"  href="login.css">
    </head>
        <body>
            <center><div class="log"><h1>CAR  PARKING  MANAGEMENT</h1></div></center><br><br>
            <center>
                <div>
                    <tr>
                    <td><label for="" name="carno"><h3>CAR NO   </label></td>
                    <td><input type="text" class="input1"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="" name="carmodel">CAR MODEL</label></td>
                    <td><input type="text" class="input"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="" name="carcolor">CAR COLOR</label></td>
                    <td><input type="text" class="input"><br><br></td>
                    </tr>

                    <tr>
                    <td><label for="" name="carowner">CAR OWNER</label></td>
                    <td><input type="text" class="input"><br><br></td>
                    </tr></h3>

                    <tr>
                    <td><input type="submit" name="park" value="PARK THE CAR" class="sub"></td>
                    <td><input type="submit" name="park" value="VACATE THE CAR" class="sub"></td>
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
        </body>
    
</html>