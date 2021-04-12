<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if((!empty($email)) && (!empty($senha))){
        header("Location: ./login.php");
        die();
    }
}
?>