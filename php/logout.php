<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_start();
if(isset($_SESSION)){
    session_destroy();
    header("location: ../forms/login.html");
    exit;
}

}
logout();
echo "HANDLE THIS PAGE";

?>