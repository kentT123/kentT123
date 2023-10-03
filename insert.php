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
        // database name => whiteform
        $conn = mysqli_connect("localhost", "root", "", "mywebsite");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $course = $_REQUEST['course'];
        $ID =  $_REQUEST['ID'];
        $Dept = $_REQUEST['Dept'];
        $DateofRegistration = $_REQUEST['DateofRegistration'];
        $OfferNo = $_REQUEST['OfferNo'];
        $Coursecode = $_REQUEST['Coursecode'];
        $Description = $_REQUEST['Description'];
        $Instructor = $_REQUEST['Instructor'];
        $Section = $_REQUEST['Section'];
        $Time = $_REQUEST['Time'];
        $Room = $_REQUEST['Room'];
        $Days = $_REQUEST['Days'];
        $Units = $_REQUEST['Units'];
      
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO form  VALUES ('$name',
            '$course','$ID','$Dept','$DateofRegistration', '$OfferNo', '$Coursecode', '$Description',
            '$Instructor', '$Section', '$Time', '$Room', '$Days', '$Units')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $course\n"
                . "$ID\n $Dept\n $DateofRegistration\n $OfferNo\n $OfferNo\n $Coursecode\n $Description\n
                $Instructor\n $Section\n $Time\n $Room\n $Days\n $Units\n");
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