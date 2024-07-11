<?php
include('basic.php');
function login(){
session_start();
if (isset($_SESSION['email'])) {
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $role=$_SESSION['role'];
    $email=$_SESSION['email'];
    
}
else{
    switchto('index.php');
}}
?>