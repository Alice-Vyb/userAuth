<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);
   echo "<h1>User registered successfully</h1>";
}

function registerUser($username, $email, $password){
    //save data into the file
    $file = "../storage/users.csv";
    $handle = fopen($file , 'a');
    $form = array(
        'fullname' => $username,
        'email' => $email,
        'password' => $password
    );
    fputcsv($handle, $form);
    fclose($handle);
    // echo "OKAY";
}

echo "HANDLE THIS PAGE";