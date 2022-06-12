<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['email'];//finish this line
    $password =$_POST['password']; //finish this

loginUser($username, $password);
//   echo "Hi";
}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
        */
        
    $file = fopen('../storage/users.csv', 'r');
    $file_input = file_get_contents("../storage/users.csv");

    if(strstr($file_input, "$email") AND strstr($file_input, "$password")){
        
        $files = fgetcsv($file);
        if($_POST['email'] == $files[1] && $_POST['password'] == $files[2]){
            $_SESSION['username'] = $file[1];
            header("Location: ../dashboard.php");
            exit();
        }
        else{
            header("Location: ../forms/login.html");
            exit();
        }
        
    }

    fclose($file);

 }
?>