<?php

$conn= new mysqli('localhost','root','','portfolio');
if(!$conn){
    die("Connection Failed:" .mysqli_connect_error());
}
if(isset($_POST['save'])){
    $namee=$_POST['namee'];
    $email=$_POST['email'];
    $project=$_POST['project'];
    $messagee=$_POST['messagee'];

    $sql_query="INSERT INTO feedback (namee,email,project,messagee)
    VALUES('$namee','$email','$project','$messagee')";

    if(mysqli_query($conn,$sql_query)){
        echo "Your feedback successfully submitted!!";
    }else{
        echo "Error: " .$sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>