<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['password'];//complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $file = '../storage/users.csv';
    $file_open = fopen($file, 'r');
     
     $handle = fopen($file, 'a'); 
     $files = fgetcsv($file_open); 
        if($handle !== false && $_POST['email'] == $files[1]){
            $data = array($files[0], $email, $newpassword);
            fputcsv($handle, $data);
            echo '<h1>Password reset successful</h1>';
        }
        else{
            echo 'User does not exist';
        }
    fclose($file_open);
    
   
}

echo "HANDLE THIS PAGE";