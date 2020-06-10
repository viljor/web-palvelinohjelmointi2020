<?php
    //asetetaan Passattien määrä
    if(isset($_COOKIE["passat"])) {
        $ostotP = $_COOKIE["passat"];
    }
    else { //jos ei ole olemassa tätä evästettä niin luodaan sellainen
        setcookie('passat',0);
        $ostotP = 0;
    }

    //asetetaan Multivanien määrä
    if(isset($_COOKIE["multivan"])) {
        $ostotV = $_COOKIE["multivan"];
    }
    else { //jos ei ole olemassa tätä evästettä niin luodaan sellainen
        setcookie('multivan',0);
        $ostotV = 0;
    }

    //otetaan haluttu auto
    $id = $_GET['id'];

    //katsotaan if-rakenteella kumpaa autoa ostetaan
    if($id == 'passat') {
        $ostotP++; //kasvatetaan määrää
        setcookie("passat",$ostotP); //asetetaan eväste
    }
    if($id == 'multivan') {
        $ostotV++; //kasvatetaan määrää
        setcookie('multivan',$ostotV); //asetetaan eväste
    }

    //redirect takaisin ostos sivulle
    header("Location: ./teht2.php"); 
    exit();
?>