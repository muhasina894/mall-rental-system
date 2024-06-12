<?php
$conn=new mysqli("localhost","root","","linksmall_db");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}