<?php include "connection.php";
    session_start();

if(array_key_exists("login", $_POST)){
    $email = mysqli_escape_string($connection, $_POST["email"]);
    $pass = mysqli_escape_string($connection, $_POST["pass"]);
    
    $query = "SELECT * FROM `clients` WHERE `email`='$email'";
    
    $result="";
    if(!($result = mysqli_query($connection, $query))){
        echo "Login query failed";
    }
    
    $row = mysqli_fetch_array($result);
        
    if(mysqli_num_rows($result)>0){
        
        if($row['password']==$pass){
            $_SESSION['id'] = $row['firstname'];
            header("location: clients.php");
            
        }
        
    }
    

}

?>