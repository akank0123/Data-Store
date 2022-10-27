<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "form");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 4 values from the form data(input)
        $city =  $_POST['city'];
        $datajob = $_POST['datajob'];
        $experience =  $_POST['experience'];
        $phone = $_POST['phone'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO data VALUES ('$id','$city',
            '$datajob','$experience','$phone')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$city\n $datajob\n "
                . "$experience\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>