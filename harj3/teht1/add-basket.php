<?php
    session_start();
    $ostotP = isset($_SESSION["passat"]) ? $_SESSION["passat"] : 0;
    $ostotV = isset($_SESSION["multivan"]) ? $_SESSION["multivan"] : 0;

    $id = $_GET['id'];

    if($id == "passat") {
        $ostotP++;
        $_SESSION["passat"] = $ostotP;
    }
    
    if($id == "multivan") {
        $ostotV++;
        $_SESSION["multivan"] = $ostotV;
    }

    header("Location: ./teht1.php"); 
    exit();
?>